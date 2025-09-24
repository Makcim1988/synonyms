<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Synonym;

class BaseWord extends Model
{
    use HasFactory;

    protected $table = 'basewords';

    public function synonyms()
    {
        return $this->hasMany(Synonym::class, 'word_id', 'id');
    }
}
