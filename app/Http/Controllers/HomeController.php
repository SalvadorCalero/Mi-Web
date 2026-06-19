<?php

namespace App\Http\Controllers;

// Importamos la clase base de controladores de Laravel
use App\Http\Controllers\Controller;
// Importamos la clase Request para gestionar posibles peticiones HTTP en el futuro
use Illuminate\Http\Request;
// Importamos el modelo Project para poder consultar la base de datos en los siguientes pasos
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Método __invoke (Controlador de acción única).
     * Como este controlador solo se va a encargar de gestionar la lógica de la página de inicio,
     * utilizamos __invoke para que se ejecute automáticamente al llamar a la clase.
     */
    public function __invoke()
    {
        // Por ahora, la base de datos está vacía, pero dejamos la lógica preparada:
        // Consultamos todos los proyectos de la tabla 'projects' ordenados por creación
        $recentProjects = Project::latest()->get();

        // Retornamos la vista 'home' (que crearemos en la Fase 3)
        // y le pasamos los proyectos mediante la función compact()
        return view('/layouts/home', compact('recentProjects'));
    }
}