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
                'description' => 'Maquetación, instalación de plugins, creación de logo, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/Agropai/HeroAgropai.webp',
                'page_image_path' => 'img/proyectos/Agropai/pageAgropai.webp',
                'url' => 'https://www.agropai.es/',
            ],
            [
                'title' => 'Aguacate Tropical',
                'description' => 'Maquetación, instalación de plugins, SEO',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/AguacateTropical/HeroAguacateTropical.webp',
                'page_image_path' => 'img/proyectos/AguacateTropical/PageAguacateTropical.webp',
                'url' => 'https://www.aguacatetropical.es/',
            ],
            [
                'title' => 'Ancabu',
                'description' => 'Maquetación de landing page, instalación de plugins, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/Ancabu/HeroAncabu.webp',                
                'page_image_path' => 'img/proyectos/Ancabu/PageAncabu.webp',
                'url' => 'https://edificioancabu.es/',
            ],
            [
                'title' => 'Box Akyles',
                'description' => 'Se tradujo a otro idioma, se ha colaborado en la maquetación de la web',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/BoxAkyles/heroAkyles.webp',
                'page_image_path' => 'img/proyectos/BoxAkyles/pageakyles.webp',
                'url' => 'https://boxakyles.com/',
            ],
            [
                'title' => 'Estética Dental',
                'description' => 'Se tradujo la web a otros idiomas.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/EsteticaDental/HeroEsteticadental.webp',
                'page_image_path' => 'img/proyectos/EsteticaDental/PageEsteticadental.webp',
                'url' => 'https://www.esteticadentalmarbella.com/',
            ],
            [
                'title' => 'Lebrato',
                'description' => 'Maquetación de la web, SEO',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/lebrato/HeroLebrato.webp',
                'page_image_path' => 'img/proyectos/lebrato/PageLebrato.webp',
                'url' => 'https://lebratoperitaciones.es/',
            ],
            [
                'title' => 'Méndez Naranjo',
                'description' => 'Maquetación de la web, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/mendezNaranjo/HeroMendezNaranjo.webp',
                'page_image_path' => 'img/proyectos/mendezNaranjo/PageMendezNaranjo.webp',
                'url' => 'https://mendeznaranjo.com/',
            ],
            [
                'title' => 'Peluquería DAF',
                'description' => 'Maquetación de la web, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/PeluqueríaDAF/heroDAF.webp',
                'page_image_path' => 'img/proyectos/PeluqueríaDAF/PageDAF.webp',
                'url' => 'https://peluqueriayesteticadaf.es',
            ],
            [
                'title' => 'Second Sayalonga',
                'description' => 'Maquetación de la web, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/secondsayalonga/HeroSecond.webp',
                'page_image_path' => 'img/proyectos/secondsayalonga/PageSecond.webp',
                'url' => 'https://2ndlifesayalonga.es/',
            ],
            [
                'title' => 'Tailor Seeds',
                'description' => 'Maquetación de la web y traducción a varios idiomas, SEO.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/tailorseeds/HeroTailor.webp',
                'page_image_path' => 'img/proyectos/tailorseeds/PageTailor.webp',
                'url' => 'https://dev.tailorseeds.com/',
            ],
            [
                'title' => 'Tu Albornoz',
                'description' => 'Maquetación, instalación de plugins, creador de texto, SEO, mantenimineto, creador de artículos',
                'categoria' => 'otros',
                'image_path' => 'img/proyectos/tuAlbornoz/HeroTualbornoz.webp',
                'page_image_path' => 'img/proyectos/tuAlbornoz/pageTuAlbornoz.webp',
                'url' => 'https://tualbornoz.com/',
            ],
            [
                'title' => 'Acero Gourmet',
                'description' => 'Maquetación, instalación de plugins, creador de texto, SEO, mantenimineto, creador de artículos',
                'categoria' => 'otros',
                'image_path' => 'img/proyectos/Acerogourmet/HeroAcerogourmet.webp',
                'page_image_path' => 'img/proyectos/Acerogourmet/PageAcerogourmet.webp',
                'url' => 'https://acerogourmet.es',
            ],
            [
                'title' => 'Ana Méndez',
                'description' => 'Maquetación, instalación de plugins, creador de texto, SEO, mantenimineto.',
                'categoria' => 'otros',
                'image_path' => 'img/proyectos/galeria/HeroGaleria.webp',
                'page_image_path' => 'img/proyectos/galeria/PageGaleria.webp',
                'url' => 'https://cajondesastre.acerogourmet.es/',
            ],
        ];

        // 3. Inserción directa en base de datos
        foreach ($proyectos as $proyecto) {
            DB::table('projects')->insert([
                'title'           => $proyecto['title'],
                'description'     => $proyecto['description'],
                'categoria'       => $proyecto['categoria'],
                'image_path'      => $proyecto['image_path'],
                'page_image_path' => $proyecto['page_image_path'],
                'url'             => $proyecto['url'],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }
    }
}