<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospedaje;

class HospedajeController extends Controller
{


    public function show($id)
{
    // Obtener el hospedaje desde la base de datos
    $hospedaje = Hospedaje::find($id);

    // Retornar la vista show.blade.php con el hospedaje
    return view('hospedajes.show', compact('hospedaje'));
}

    

    public function index()
    
    {


        
        // Obtener todos los hospedajes desde la base de datos
        $hospedajes = Hospedaje::all();

        // Retornar la vista index.blade.php con los hospedajes
        return view('resultados', compact('hospedajes'));    }

    public function create()
    {
        // Retornar la vista create.blade.php para crear un nuevo hospedaje
        return view('hospedajes.create');
    }

    public function store(Request $request)
    {
        // Validar los datos enviados por el formulario
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
            'check_in' => 'date',
            'check_out' => 'date',
            'stars' => 'required|integer',
            'descripcion' => '',
            'foto' => 'nullable|image',
        ]);

        // Subir la imagen del hospedaje
       // $fotoPath = $request->file('foto')->store('public/hospedajes');

        // Crear un nuevo hospedaje en la base de datos
        $hospedaje = new Hospedaje();
        $hospedaje->nombre = $request->input('nombre');
        $hospedaje->ubicacion = $request->input('ubicacion');
        $hospedaje->check_in = $request->input('check_in');
        $hospedaje->check_out = $request->input('check_out');
        $hospedaje->stars = $request->input('stars');
        $hospedaje->descripcion = $request->input('descripcion');
      //  $hospedaje->foto = $fotoPath;
        $hospedaje->save();

        // Redireccionar al listado de hospedajes
        return redirect()->route('resultados')->with('success', 'Hospedaje creado exitosamente.');
    }

    public function resultados()
{
    // Obtener todos los hospedajes desde la base de datos
    $hospedajes = Hospedaje::all();

    // Retornar la vista resultados.blade.php con los hospedajes
    return view('resultados', compact('hospedajes'));
}


    // Otros métodos como show(), edit(), update(), destroy() aquí...
}
