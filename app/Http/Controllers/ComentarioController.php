<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Hospedaje;
use App\Models\Comment;
use Illuminate\Http\Request;


class ComentarioController extends Controller
{
  
    
    



    public function show($agendaId, $comentarioId)
    {
        $comentario = Comment::where('agenda_id', $agendaId)->findOrFail($comentarioId);
        return view('agenda.comentarios.show', compact('comentario'));
    }
    








    public function storeAgenda(Request $request, Agenda $agenda)
    {
        // Valida los datos del formulario de comentarios
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image',
        ]);

        // Crea un nuevo comentario
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->agenda_id = $agenda->id;
        $comment->content = $request->content;

        // Sube la imagen (si se proporciona)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('comments', 'public');
            $comment->image = $path;
        }

        // Guarda el comentario en la base de datos
        $comment->save();

        // Redirecciona a la vista de detalles de la agenda
        return redirect()->route('agenda.show', ['agenda' => $agenda->id]);
    }




    public function edit(Comment $comentario)
    {
        return view('comentarios.edit', compact('comentario'));
    }




    public function update(Request $request, Comment $comentario)
    {
        $comentario->update([
            'content' => $request->input('content'),
            // Otros campos que puedas actualizar
        ]);

        return redirect()->route('agenda.show', ['agenda' => $comentario->agenda_id]);
    }


   // public function deleteConfirmation($agendaId, $comentarioId)
    //{
      //  $comentario = Comment::where('agenda_id', $agendaId)->findOrFail($comentarioId);
        //return view('agenda.comentarios.delete_confirmation', compact('comentario'));
   // }




   public function destroy($agendaId, $comentarioId)
   {
       $comentario = Comment::where('agenda_id', $agendaId)->findOrFail($comentarioId);
       $comentario->delete();
   
       return back();
   }
   
    

   // public function show(Comment $comentario)
    //{
    //    return view('comentarios.show', compact('comentario'));
    //}


    public function storeHospedaje(Request $request, Hospedaje $hospedaje)
    {
        // Valida los datos del formulario de comentarios
        $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image',
        ]);

        // Crea un nuevo comentario
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->hospedaje_id = $hospedaje->id;
        $comment->content = $request->content;

        // Sube la imagen (si se proporciona)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('comments', 'public');
            $comment->image = $path;
        }

        // Guarda el comentario en la base de datos
        $comment->save();

        // Obtén todos los comentarios del hospedaje
        $comentarios = $hospedaje->comentarios;

        // Retorna la vista de comentarios con los datos necesarios
        return view('hospedajes.comentarios', compact('hospedaje', 'comentarios'));
    }

    public function filter(Request $request, $agendaId)
        {               
            $categoria = $request->input('categoria');
            
            // Realizar la lógica de filtrado según la categoría
            
            // Obtener los comentarios filtrados
            
            // Retornar la vista con los comentarios filtrados
        }

        public function agenda()
        {
            return $this->belongsTo(Agenda::class);
        }

}

