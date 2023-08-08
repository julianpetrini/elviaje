<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospedaje;

class HospedajeController extends Controller
{
    public function index()
    {
        $hospedajes = Hospedaje::orderBy('check_in')->get();
    
        return view('hospedajes.index', compact('hospedajes'));
    }
    

    public function create()
    {
        // Retornar la vista create.blade.php para crear un nuevo hospedaje
        return view('hospedajes.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'ubicacion' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
        'stars' => 'required|integer',
    ]);

    $hospedaje = new Hospedaje();
    $hospedaje->nombre = $request->input('nombre');
    $hospedaje->ubicacion = $request->input('ubicacion');
    $hospedaje->check_in = $request->input('check_in');
    $hospedaje->check_out = $request->input('check_out');
    $hospedaje->stars = $request->input('stars');
    $hospedaje->descripcion = $request->input('descripcion');
    
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('public/hospedajes');
        $hospedaje->foto = $fotoPath;
    }
    
    $hospedaje->save();

    return redirect()->route('hospedajes.index')->with('success', 'Hospedaje creado exitosamente.');
}


    public function upcoming()
    {
        $upcomingHospedajes = Hospedaje::where('check_in', '>', now())->orderBy('check_in')->get();

        return view('hospedajes.upcoming', compact('upcomingHospedajes'));
    }

    public function show(Hospedaje $hospedaje)
    {
        return view('hospedajes.show', compact('hospedaje'));
    }
    

    
}
