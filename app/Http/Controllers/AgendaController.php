<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();

        return view('agenda.index', compact('agenda'));
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de planes en la agenda
    }

    public function store(Request $request)
    {
        // Lógica para almacenar el nuevo plan en la base de datos
    }

    public function show(Agenda $agenda)
    {
        return view('agenda.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        // Lógica para actualizar los datos del plan en la base de datos
    }

    public function destroy(Agenda $agenda)
    {
        // Lógica para eliminar el plan de la agenda
    }
}
