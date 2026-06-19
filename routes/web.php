<?php

use Illuminate\Support\Facades\Route;
// Importamos de forma explícita nuestro controlador recién creado
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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

use Illuminate\Support\Facades\Artisan;

Route::get('/ejecutar-seeder-secreto', function () {
    Artisan::call('db:seed'); // O 'db:seed --class=ProjectSeeder' si tienes uno específico
    return '¡Base de datos rellenada con éxito!';
});