<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Agenda;
use App\Http\Controllers\WeatherController;
use App\Models\Comentario;



class AgendaController extends Controller
{

    

    public function index(Request $request)
    {
        $weatherController = new WeatherController();
        $weatherData = $weatherController->getWeather();



        $categoria = $request->input('categoria');
    
        $actividades = Agenda::query();
    
        if ($categoria) {
            $actividades->where('categoria', $categoria);
        }
    
        $actividades->orderBy('fecha', 'asc')
                   ->orderBy('hora_inicio', 'asc');
    
        $actividades = $actividades->get();
    
        
        return view('agenda.index', compact('actividades', 'weatherData'));

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
        $actividad->descripcion = $request->descripcion;
    
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = $imagen->store('public/imagenes'); // Almacena la imagen en la carpeta "storage/app/public/imagenes"
            $actividad->imagen = Storage::url($rutaImagen);
        }
    
        $actividad->save();
    
        return redirect()->route('agenda.index');
    }
    



    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        $comentarios = $agenda->comentarios;
    
        return view('agenda.show', compact('agenda', 'comentarios'));
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

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
    


    



}

