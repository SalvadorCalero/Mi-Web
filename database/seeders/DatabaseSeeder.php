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
                'description' => 'Desarrollo de una página web corporativa orientada a mejorar la imagen de marca, facilitar el contacto con clientes y aumentar la visibilidad online.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/Agropai/HeroAgropai.webp',
                'page_image_path' => 'img/proyectos/Agropai/pageAgropai.webp',
                'url' => 'https://www.agropai.es/',
            ],
            [
                'title' => 'Aguacate Tropical',
                'description' => 'Diseño de una web moderna para presentar productos, mejorar la presencia digital de la empresa y facilitar la comunicación con clientes potenciales.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/AguacateTropical/HeroAguacateTropical.webp',
                'page_image_path' => 'img/proyectos/AguacateTropical/PageAguacateTropical.webp',
                'url' => 'https://www.aguacatetropical.es/',
            ],
            [
                'title' => 'Ancabu',
                'description' => 'Landing page promocional para una promoción inmobiliaria, diseñada para captar el interés de compradores y generar solicitudes de información.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/Ancabu/HeroAncabu.webp',                
                'page_image_path' => 'img/proyectos/Ancabu/PageAncabu.webp',
                'url' => 'https://edificioancabu.es/',
            ],
            [
                'title' => 'Box Akyles',
                'description' => 'Participación en la mejora y adaptación de la página web, facilitando el acceso a la información para usuarios de diferentes idiomas y mejorando la experiencia de navegación.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/BoxAkyles/heroAkyles.webp',
                'page_image_path' => 'img/proyectos/BoxAkyles/pageakyles.webp',
                'url' => 'https://boxakyles.com/',
            ],
            [
                'title' => 'Estética Dental',
                'description' => 'Adaptación multilingüe de la página web para facilitar la comunicación con pacientes internacionales y ampliar el alcance de la clínica.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/EsteticaDental/HeroEsteticadental.webp',
                'page_image_path' => 'img/proyectos/EsteticaDental/PageEsteticadental.webp',
                'url' => 'https://www.esteticadentalmarbella.com/',
            ],
            [
                'title' => 'Lebrato',
                'description' => 'Desarrollo de una presencia online profesional orientada a transmitir confianza, mostrar servicios especializados y facilitar el contacto con potenciales clientes.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/lebrato/HeroLebrato.webp',
                'page_image_path' => 'img/proyectos/lebrato/PageLebrato.webp',
                'url' => 'https://lebratoperitaciones.es/',
            ],
            [
                'title' => 'Méndez Naranjo',
                'description' => 'Diseño de una página web moderna enfocada en mejorar la imagen digital del negocio y facilitar la captación de nuevos clientes.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/mendezNaranjo/HeroMendezNaranjo.webp',
                'page_image_path' => 'img/proyectos/mendezNaranjo/PageMendezNaranjo.webp',
                'url' => 'https://mendeznaranjo.com/',
            ],
            [
                'title' => 'Peluquería DAF',
                'description' => 'Creación de una web visual y accesible que permite presentar los servicios del negocio y reforzar su presencia en Internet.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/PeluqueríaDAF/heroDAF.webp',
                'page_image_path' => 'img/proyectos/PeluqueríaDAF/PageDAF.webp',
                'url' => 'https://peluqueriayesteticadaf.es',
            ],
            [
                'title' => 'Second Sayalonga',
                'description' => 'Desarrollo de una página web diseñada para mostrar productos y servicios de forma clara, mejorando la experiencia del usuario y la visibilidad online.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/secondsayalonga/HeroSecond.webp',
                'page_image_path' => 'img/proyectos/secondsayalonga/PageSecond.webp',
                'url' => 'https://2ndlifesayalonga.es/',
            ],
            [
                'title' => 'Tailor Seeds',
                'description' => 'Desarrollo de una web corporativa multilingüe orientada a facilitar la comunicación internacional y presentar la actividad de la empresa de forma profesional.',
                'categoria' => 'formacion',
                'image_path' => 'img/proyectos/tailorseeds/HeroTailor.webp',
                'page_image_path' => 'img/proyectos/tailorseeds/PageTailor.webp',
                'url' => 'https://dev.tailorseeds.com/',
            ],
            [
                'title' => 'Tu Albornoz',
                'description' => 'Desarrollo y mantenimiento de una tienda online orientada a mejorar la experiencia de compra, reforzar la imagen de marca y facilitar la captación de nuevos clientes mediante contenidos optimizados.',
                'categoria' => 'otros',
                'image_path' => 'img/proyectos/tuAlbornoz/HeroTualbornoz.webp',
                'page_image_path' => 'img/proyectos/tuAlbornoz/pageTuAlbornoz.webp',
                'url' => 'https://tualbornoz.com/',
            ],
            [
                'title' => 'Acero Gourmet',
                'description' => 'Desarrollo y optimización de una plataforma web enfocada en la promoción de cuchillería, mejorando la visibilidad online y facilitando el acceso a información de interés para los usuarios.',
                'categoria' => 'otros',
                'image_path' => 'img/proyectos/Acerogourmet/HeroAcerogourmet.webp',
                'page_image_path' => 'img/proyectos/Acerogourmet/PageAcerogourmet.webp',
                'url' => 'https://acerogourmet.es',
            ],
            [
                'title' => 'Ana Méndez',
                'description' => 'Espacio web creado para presentar trabajos y proyectos de forma visual, reforzando la identidad personal y facilitando el acceso a los contenidos.',
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