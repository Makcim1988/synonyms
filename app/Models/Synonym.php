<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseWord;

class Synonym extends Model
{
    use HasFactory;

    protected $table = 'synonyms';

    public function word()
    {
        return $this->belongsTo(BaseWord::class, 'word_id', 'id');
    }
}
