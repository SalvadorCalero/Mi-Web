<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Importamos el modelo Project para recuperar todo el listado de la base de datos
use App\Models\Project;

class PageController extends Controller
{
    /**
     * Muestra la página del Portfolio con los proyectos clasificados por pestañas.
     */
    public function portfolio()
    {
        // 1. Recuperamos absolutamente todos los proyectos de la tabla utilizando Eloquent ORM
        $allProjects = Project::all();

        // 2. Clasificamos los proyectos filtrando en memoria por la columna 'categoria'
        // El método where() de las colecciones de Laravel es idóneo y muy rápido para esto
        $formacionProjects = $allProjects->where('categoria', 'formacion');
        $personalesProjects = $allProjects->where('categoria', 'personales');
        $otrosProjects = $allProjects->where('categoria', 'otros');

        // 3. Retornamos la vista pasando las tres variables independientes mediante compact()
        return view('/layouts/portfolio', compact('formacionProjects', 'personalesProjects', 'otrosProjects'));
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