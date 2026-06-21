<?php

use Illuminate\Support\Facades\Route;
// Importamos de forma explícita nuestro controlador recién creado
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LegalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí es donde se registran las rutas para la aplicación web.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el grupo de middleware "web".
|
 */

// Definimos la ruta de la raíz de la web ('/')
// Al usar un controlador invokable, solo necesitamos pasar la clase en un string o referencia
Route::get('/', HomeController::class)->name('home');

// Rutas de Contenido de la Aplicación (Gestionadas por PageController)
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/sobre-mi', [PageController::class, 'about'])->name('about');

// Rutas del Formulario de Contacto (Gestionadas por ContactController)
// Muestra el formulario (GET)
Route::get('/contacto', [ContactController::class, 'index'])->name('contact.index');
// Procesa los datos al pulsar enviar (POST)
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');

// Rutas para las páginas legales
Route::controller(LegalController::class)->group(function () {
    Route::get('/aviso-legal', 'avisoLegal')->name('legal.aviso-legal');
    Route::get('/politica-privacidad', 'privacidad')->name('legal.politica-privacidad');
    Route::get('/politica-cookies', 'cookies')->name('legal.cookies');
    Route::get('/declaracion-accesibilidad', 'accesibilidad')->name('legal.declaracion-accesibilidad');
});