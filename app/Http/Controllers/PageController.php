<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Importamos el modelo Project para recuperar todo el listado de la base de datos
use App\Models\Project;

class PageController extends Controller
{
    /**
     * Muestra la página del Portfolio con todos los proyectos.
     */
    public function portfolio()
    {
        // Recuperamos absolutamente todos los proyectos almacenados en la tabla 'projects'
        // utilizando el método de Eloquent ORM 'all()'
        $projects = Project::all();

        // Retornamos la vista 'portfolio' (Fase 3) pasando la colección de proyectos
        return view('/layouts/portfolio', compact('projects'));
    }

    /**
     * Muestra la página estática "Sobre Mí" (Tu trayectoria y perfil técnico).
     */
    public function about()
    {
        // Al ser una página puramente de contenido textual y estratégico, 
        // simplemente renderizamos la vista correspondiente
        return view('/layouts/about');
    }
}