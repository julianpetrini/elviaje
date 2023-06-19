<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request, Hospedaje $hospedaje)
    {
        // Lógica para almacenar el comentario en la base de datos y asociarlo al hospedaje
    }
}
