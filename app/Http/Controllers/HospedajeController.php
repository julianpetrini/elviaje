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



    public function update(Request $request, $id)
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

    // Obtener el hospedaje desde la base de datos
    $hospedaje = Hospedaje::find($id);

    // Actualizar los campos del hospedaje con los nuevos valores del formulario
    $hospedaje->nombre = $request->input('nombre');
    $hospedaje->ubicacion = $request->input('ubicacion');
    $hospedaje->check_in = $request->input('check_in');
    $hospedaje->check_out = $request->input('check_out');
    $hospedaje->stars = $request->input('stars');
    $hospedaje->descripcion = $request->input('descripcion');

    // Verificar si se ha enviado una nueva foto y actualizarla si es necesario
    if ($request->hasFile('foto')) {
        // Subir la nueva imagen del hospedaje
        // $fotoPath = $request->file('foto')->store('public/hospedajes');

        // Actualizar el campo de la foto del hospedaje con la nueva ruta de la imagen
        // $hospedaje->foto = $fotoPath;
    }

    // Guardar los cambios en la base de datos
    $hospedaje->save();

    // Redireccionar a la página de detalles del hospedaje actualizado
    return redirect()->route('hospedajes.show', $hospedaje->id)->with('success', 'Hospedaje actualizado exitosamente.');
}





    public function resultados()
{
    // Obtener todos los hospedajes desde la base de datos
    $hospedajes = Hospedaje::all();

    // Retornar la vista resultados.blade.php con los hospedajes
    return view('resultados', compact('hospedajes'));
}




public function destroy($id)
{
    // Obtener el hospedaje desde la base de datos
    $hospedaje = Hospedaje::find($id);

    // Verificar si el hospedaje existe
    if (!$hospedaje) {
        // Si el hospedaje no existe, puedes mostrar un mensaje de error o redireccionar a otra página
        return redirect()->route('resultados')->with('error', 'El hospedaje no existe.');
    }

    // Eliminar el hospedaje
    $hospedaje->delete();

    // Redireccionar al listado de hospedajes con un mensaje de éxito
    return redirect()->route('resultados')->with('success', 'Hospedaje eliminado exitosamente.');
}

public function edit($id)
{
    // Obtener el hospedaje desde la base de datos
    $hospedaje = Hospedaje::find($id);

    // Verificar si el hospedaje existe
    if (!$hospedaje) {
        // Si el hospedaje no existe, puedes mostrar un mensaje de error o redireccionar a otra página
        return redirect()->route('resultados')->with('error', 'El hospedaje no existe.');
    }

    // Retornar la vista edit.blade.php con el hospedaje
    return view('hospedajes.edit', compact('hospedaje'));
}



    // Otros métodos como show(), edit(), update(), destroy() aquí...
}
