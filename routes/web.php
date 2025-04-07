<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\MenuPublicoController;
use App\Http\Controllers\SearchController;

use App\Models\Producto;
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

 Route::get('/', function () {
     return view('inicio');
});
 Route::get('/inicio', function () {
     return view('inicio'); 
 })->name('inicio');

// Ruta para Agencia de Viajes
Route::get('/viajes', function () {
    return view('viajes');
})->name('viajes');

// Ruta para Restaurante
Route::get('/restaurante', function () {
    return view('restaurante');
})->name('restaurante');

// Ruta para Hospedaje
Route::get('/hospedaje', function () {
    return view('hospedaje');
})->name('hospedaje');

//Ruta conocenos
Route::get('/conocenos', function () {
    return view('conocenos');
})->name('conocenos');

//Ruta para preguntas frecuentes
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

//Ruta para mostrar el menu 
Route::get('/menu', function () {
    $menuItems = \App\Models\Producto::where('visible', true)->get();
    return view('public-menu', compact('menuItems'));
})->name('menu');

Route::get('/menu', [MenuPublicoController::class, 'index'])->name('public.menu');
Route::get('/menu', [MenuPublicoController::class, 'index'])->name('menu');
Route::get('/search/suggestions', [SearchController::class, 'suggestions'])->name('search.suggestions');

//Rutas de administrador
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('dashboard')->group(function () {
        Route::resource('productos', ProductoController::class);
        Route::resource('categorias', CategoriaController::class);
        Route::resource('paquetes', PaqueteController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

