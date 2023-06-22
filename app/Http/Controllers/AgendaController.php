<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $actividades = Agenda::all();
        return view('agenda.index', compact('actividades'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        $actividad = new Agenda();
        $actividad->titulo = $request->titulo;
        $actividad->categoria = $request->categoria;
        $actividad->fecha = $request->fecha;
        $actividad->hora_inicio = $request->hora_inicio;
        $actividad->hora_fin = $request->hora_fin;
        $actividad->imagen = $request->imagen;
        $actividad->descripcion = $request->descripcion;
        $actividad->save();

        return redirect()->route('agenda.index');
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->load('comments'); // Cargar los comentarios relacionados con la agenda
    
        return view('agenda.show', compact('agenda'));
    }
    
    public function showComment($agendaId, $comentarioId)
    {
        $comentario = Comment::find($comentarioId);
        return view('comentario.show', compact('comentario'));
    }
    
    






    

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $agenda->titulo = $request->titulo;
        $agenda->categoria = $request->categoria;
        $agenda->fecha = $request->fecha;
        $agenda->hora_inicio = $request->hora_inicio;
        $agenda->hora_fin = $request->hora_fin;
        $agenda->imagen = $request->imagen;
        $agenda->descripcion = $request->descripcion;
        $agenda->save();

        return redirect()->route('agenda.index');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agenda.index');
    }
}

