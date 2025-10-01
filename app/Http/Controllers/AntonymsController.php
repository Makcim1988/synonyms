<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseWordAntonym;

class AntonymsController extends Controller
{
   	public function index()
    {
        return view('main-antonyms');
    }
    
    public function showWordsByLetter(Request $request)
    {
        $letter = $request->query('letter');
        $words = BaseWordAntonym::where('word', 'like', $letter . '%')->paginate(300);
        $wordsAll = BaseWordAntonym::where('word', 'like', $letter . '%')->get();
        $wordsCount = count($wordsAll);

        return view('letter-antonym', ['words' => $words, 'count' => $wordsCount, 'letter' => $letter]);
    }

    public function showWord(Request $request, $slug)
    {
        $letter = $request->query('letter');
        $word = BaseWordAntonym::where('slug', $slug)->first();

        return view('antonyms', ['word' => $word, 'letter' => $letter]);
    }

    public function search(Request $request)
    {
        $search = $request->query('search');

        $result = null;
        $count = null;
        $allResult = null;
        
        /*if($search) {
            $result = BaseWord::where('word', 'like', "%{$search}%")->paginate(10);
            $count = BaseWord::where('word', 'like', "%{$search}%")->count();
            $allResult = BaseWord::where('word', 'like', "%{$search}%")->get();
        }*/
        
        $exactMatch = BaseWordAntonym::where('word', $search)->first();

        if ($exactMatch) {
            // Возвращаем как запрос, чтобы использовать paginate()
            $result = BaseWordAntonym::where('id', $exactMatch->id)->paginate(10);
            $count = 1;
            $allResult = collect([$exactMatch]);
        } else {
            // Иначе — обычный LIKE-поиск
            $result = BaseWordAntonym::where('word', 'like', "%{$search}%")->paginate(10);
            $count = BaseWordAntonym::where('word', 'like', "%{$search}%")->count();
            $allResult = BaseWordAntonym::where('word', 'like', "%{$search}%")->get();
        }
        
        return view('search-antonyms', ['result' => $result, 'search' => $search, 'count' => $count, 'allResult' => $allResult]);
    }
}
