<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseWord;

class SynonymsController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function showWordsByLetter(Request $request)
    {
        $letter = $request->query('letter');
        $words = BaseWord::where('word', 'like', $letter . '%')->paginate(300);
        $wordsAll = BaseWord::where('word', 'like', $letter . '%')->get();
        $wordsCount = count($wordsAll);

        return view('letter', ['words' => $words, 'count' => $wordsCount, 'letter' => $letter]);
    }

    public function showWord(Request $request, $slug)
    {
        $letter = $request->query('letter');
        $word = BaseWord::where('slug', $slug)->first();

        return view('synonyms', ['word' => $word, 'letter' => $letter]);
    }

    public function search(Request $request)
    {
        $search = $request->query('search');

        $result = null;
        $count = null;
        $allResult = null;

        if($search) {
            $result = BaseWord::where('word', 'like', "%{$search}%")->paginate(10);
            $count = BaseWord::where('word', 'like', "%{$search}%")->count();
            $allResult = BaseWord::where('word', 'like', "%{$search}%")->get();
        }

        return view('search', ['result' => $result, 'search' => $search, 'count' => $count, 'allResult' => $allResult]);
    }
}
