<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HospedajeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ComentarioController;

use App\Http\Controllers\WeatherController;









// Rutas protegidas (requieren autenticación)
Route::middleware(['auth'])->group(function () {
    // Rutas para hospedajes
    
    //Route::get('/hospedajes/create', [HospedajeController::class, 'create'])->name('hospedajes.create');
    //Route::post('/hospedajes', [HospedajeController::class, 'store'])->name('hospedajes.store');
   
    //Route::get('/hospedajes/{hospedaje}/edit', [HospedajeController::class, 'edit'])->name('hospedajes.edit');
    //Route::put('/hospedajes/{hospedaje}', [HospedajeController::class, 'update'])->name('hospedajes.update');
    //Route::delete('/hospedajes/{hospedaje}', [HospedajeController::class, 'destroy'])->name('hospedajes.destroy');

    




    // Rutas para comentarios
    Route::post('/agenda/{agenda}/comentarios', [ComentarioController::class, 'storeAgenda'])->name('agenda.comentarios.storeAgenda');
    //Route::get('/agenda/{agenda}/comentarios/{comentario}/edit', [ComentarioController::class, 'edit'])->name('agenda.comentarios.edit');
    //Route::get('/agenda/{agenda}/comentarios/{comentario}/edit', [ComentarioController::class, 'edit'])->name('agenda.comentarios.edit');
    Route::get('/agenda/{agendaId}/comentarios/{comentarioId}/edit', [ComentarioController::class, 'edit'])->name('agenda.comentarios.edit');
    Route::delete('/agenda/{agendaId}/comentarios/{comentarioId}', 'ComentarioController@destroy')->name('agenda.comentarios.destroy');


    Route::put('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'update'])->name('agenda.comentarios.update');
    Route::get('/agenda/{agenda}/comentarios/{comentario}/delete', [ComentarioController::class, 'deleteConfirmation'])->name('agenda.comentarios.confirm-delete');
    //Route::delete('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'destroy'])->name('agenda.comentarios.destroy');
    Route::get('/agenda/{agenda}/comentarios/filter', [ComentarioController::class, 'filter'])->name('agenda.comentarios.filter');

    // Rutas para la agenda
    Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
    Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::get('/agenda/{agenda}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
    Route::put('/agenda/{agenda}', [AgendaController::class, 'update'])->name('agenda.update');
    Route::delete('/agenda/{agenda}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
    
    // Rutas para el perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para el dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');
});


Route::get('/', [WeatherController::class, 'index'])->name('welcome');


Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{agenda}', [AgendaController::class, 'show'])->name('agenda.show');
Route::get('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'show'])->name('agenda.comentarios.show');

Route::get('/hospedajes', [HospedajeController::class, 'index'])->name('hospedajes.index');
Route::get('/hospedajes/{hospedaje}', [HospedajeController::class, 'show'])->name('hospedajes.show');


// Rutas de autenticación
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
