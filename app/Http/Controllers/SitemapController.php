<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        // Recuperamos los proyectos por si en el futuro quieres iterar sus URLs en el sitemap
        $projects = Project::all();

        // Renderizamos la vista de Blade que contiene la estructura XML
        $content = view('sitemap', compact('projects'));

        // Retornamos la respuesta asegurando la cabecera 'text/xml' que espera Google
        return response($content, 200)->header('Content-Type', 'text/xml');
    }
}