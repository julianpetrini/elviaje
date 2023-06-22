<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    public function comentarios()
    {
        return $this->hasMany(Comment::class, 'agenda_id');

    }

        // Resto de las definiciones del modelo
}
