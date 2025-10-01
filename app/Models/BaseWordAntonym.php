<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Antonym;

class BaseWordAntonym extends Model
{
    use HasFactory;

    protected $connection = 'second'; // имя подключения из config/database.php
    protected $table = 'basewords';

    public function antonyms()
    {
        return $this->hasMany(Antonym::class, 'word_id', 'id');
    }
}
