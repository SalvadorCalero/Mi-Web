<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Limpieza segura de la tabla
        DB::table('projects')->delete();

        // 2. Mapeo completo de tu árbol de directorios real
        $proyectos = [
            [
                'title' => 'Agropai',
                'description' => 'Plataforma digital corporativa optimizada para el sector agrícola.',
                'image_path' => 'img/proyectos/Agropai/HeroAgropai.webp',
                'page_image_path' => 'img/proyectos/Agropai/pageAgropai.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Aguacate Tropical',
                'description' => 'Desarrollo e-commerce enfocado en la distribución directa de fruta tropical.',
                'image_path' => 'img/proyectos/AguacateTropical/HeroAguacateTropical.webp',
                'page_image_path' => 'img/proyectos/AguacateTropical/PageAguacateTropical.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Ancabu',
                'description' => 'Sitio web corporativo con optimización técnica de presentación.',
                'image_path' => 'img/proyectos/Ancabu/HeroAncabu.webp',
                'page_image_path' => 'img/proyectos/Ancabu/PageAncabu.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Box Akyles',
                'description' => 'Plataforma web para centro deportivo con gestión de horarios.',
                'image_path' => 'img/proyectos/BoxAkyles/heroAkyles.webp',
                'page_image_path' => 'img/proyectos/BoxAkyles/pageakyles.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Estética Dental',
                'description' => 'Landing page médica optimizada para la conversión.',
                'image_path' => 'img/proyectos/EsteticaDental/HeroEsteticadental.webp',
                'page_image_path' => 'img/proyectos/EsteticaDental/PageEsteticadental.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Lebrato',
                'description' => 'Desarrollo web corporativo estructurado para identidad de marca.',
                'image_path' => 'img/proyectos/lebrato/HeroLebrato.webp',
                'page_image_path' => 'img/proyectos/lebrato/PageLebrato.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Méndez Naranjo',
                'description' => 'Solución web a medida orientada a la captación de clientes.',
                'image_path' => 'img/proyectos/mendezNaranjo/HeroMendezNaranjo.webp',
                'page_image_path' => 'img/proyectos/mendezNaranjo/PageMendezNaranjo.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Peluquería DAF',
                'description' => 'Web corporativa y catálogo desarrollado para el sector estético.',
                'image_path' => 'img/proyectos/PeluqueríaDAF/heroDAF.webp',
                'page_image_path' => 'img/proyectos/PeluqueríaDAF/PageDAF.webp',
                'url' => 'https://peluqueriayesteticadaf.es',
            ],
            [
                'title' => 'Second Sayalonga',
                'description' => 'Plataforma digital optimizada para la exposición de inmuebles o catálogo.',
                'image_path' => 'img/proyectos/secondsayalonga/HeroSecond.webp',
                'page_image_path' => 'img/proyectos/secondsayalonga/PageSecond.webp',
                'url' => 'https://github.com',
            ],
            [
                'title' => 'Tailor Seeds',
                'description' => 'E-commerce especializado en la distribución de semillas agrícolas.',
                'image_path' => 'img/proyectos/tailorseeds/HeroTailor.webp',
                'page_image_path' => 'img/proyectos/tailorseeds/PageTailor.webp',
                'url' => 'https://github.com',
            ],
        ];

        // 3. Inserción directa en base de datos
        foreach ($proyectos as $proyecto) {
            DB::table('projects')->insert([
                'title'           => $proyecto['title'],
                'description'     => $proyecto['description'],
                'image_path'      => $proyecto['image_path'],
                'page_image_path' => $proyecto['page_image_path'],
                'url'             => $proyecto['url'],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}