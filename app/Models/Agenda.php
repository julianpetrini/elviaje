<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

        // Resto de las definiciones del modelo
}
