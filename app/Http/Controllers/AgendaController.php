<?php

namespace App\Http\Controllers;
use App\Models\Agenda;


use Illuminate\Http\Request;
class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agendas::all();

        return view('agenda.index', compact('agenda'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        // Validar los datos enviados por el formulario
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date',
        ]);

        // Crear un nuevo plan en la base de datos
        $agenda = new Agendas();
        $agenda->titulo = $request->input('titulo');
        $agenda->descripcion = $request->input('descripcion');
        $agenda->fecha = $request->input('fecha');
        $agenda->save();

        // Redireccionar a la página de la agenda
        return redirect()->route('agenda.index')->with('success', 'Plan creado exitosamente.');
    }

    public function show(Agendas $agenda)
    {
        return view('agenda.show', compact('agenda'));
    }

    public function edit(Agendas $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agendas $agenda)
    {
        // Validar los datos enviados por el formulario
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required|date',
        ]);

        // Actualizar los datos del plan en la base de datos
        $agenda->titulo = $request->input('titulo');
        $agenda->descripcion = $request->input('descripcion');
        $agenda->fecha = $request->input('fecha');
        $agenda->save();

        // Redireccionar a la página de detalle del plan
        return redirect()->route('agenda.show', $agenda->id)->with('success', 'Plan actualizado exitosamente.');
    }

    public function destroy(Agendas $agenda)
    {
        // Eliminar el plan de la agenda
        $agenda->delete();

        // Redireccionar a la página de la agenda
        return redirect()->route('agenda.index')->with('success', 'Plan eliminado exitosamente.');
    }
}
