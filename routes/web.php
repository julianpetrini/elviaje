<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HospedajeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ComentarioController;

Route::middleware(['auth'])->group(function () {
    // Rutas para hospedajes
    Route::get('/hospedajes', [HospedajeController::class, 'index'])->name('hospedajes.index');
    Route::get('/hospedajes/create', [HospedajeController::class, 'create'])->name('hospedajes.create');
    Route::post('/hospedajes', [HospedajeController::class, 'store'])->name('hospedajes.store');
    Route::get('/hospedajes/{hospedaje}', [HospedajeController::class, 'show'])->name('hospedajes.show');
    Route::get('/hospedajes/{hospedaje}/edit', [HospedajeController::class, 'edit'])->name('hospedajes.edit');
    Route::put('/hospedajes/{hospedaje}', [HospedajeController::class, 'update'])->name('hospedajes.update');
    Route::delete('/hospedajes/{hospedaje}', [HospedajeController::class, 'destroy'])->name('hospedajes.destroy');

    Route::get('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'show'])->name('agenda.comentarios.show');
    Route::get('/agenda/{agenda}/comentarios/{comentario}/edit', [ComentarioController::class, 'edit'])->name('agenda.comentarios.edit');
    Route::put('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'update'])->name('agenda.comentarios.update');
    Route::get('/agenda/{agenda}/comentarios/{comentario}/delete', [ComentarioController::class, 'deleteConfirmation'])->name('agenda.comentarios.confirm-delete');
    Route::delete('/agenda/{agenda}/comentarios/{comentario}', [ComentarioController::class, 'destroy'])->name('agenda.comentarios.destroy');

    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
    Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
    Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::get('/agenda/{agenda}', [AgendaController::class, 'show'])->name('agenda.show');
    Route::get('/agenda/{agenda}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
    Route::put('/agenda/{agenda}', [AgendaController::class, 'update'])->name('agenda.update');
    Route::delete('/agenda/{agenda}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

    Route::post('/agenda/{agenda}/comentarios', [ComentarioController::class, 'storeAgenda'])->name('agenda.comentarios.store');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
