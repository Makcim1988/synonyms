<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseWordAntonym;

class Antonym extends Model
{
    use HasFactory;
    
	protected $connection = 'second'; // имя подключения из config/database.php
    protected $table = 'antonyms';

    public function word()
    {
        return $this->belongsTo(BaseWordAntonym::class, 'word_id', 'id');
    }
}
