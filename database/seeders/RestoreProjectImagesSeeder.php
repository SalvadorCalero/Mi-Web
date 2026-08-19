<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectImage;
use App\Models\Project;

class RestoreProjectImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vaciamos la tabla por seguridad para empezar con un entorno limpio
        ProjectImage::truncate();

        // 1. IMAGEN PARA TUALBORNOZ.COM
        $albornoz = Project::where('title', 'LIKE', '%albornoz%')->first();
        if ($albornoz) {
            ProjectImage::create([
                'project_id' => $albornoz->id,
                'image_path' => 'img/proyectos/tuAlbornoz/pageTuAlbornoz.webp'
            ]);
        }

        // 2. IMAGEN PARA ACEROGOURMET.ES
        $acero = Project::where('title', 'LIKE', '%acero%')->first();
        if ($acero) {
            ProjectImage::create([
                'project_id' => $acero->id,
                'image_path' => 'img/proyectos/aceroGourmet/pageAceroGourmet.webp' 
            ]);
        }

        // 3. IMAGEN PARA AGROPAI
        $agropai = Project::where('title', 'LIKE', '%agropai%')->first();
        if ($agropai) {
            ProjectImage::create([
                'project_id' => $agropai->id,
                // Modifica esta ruta si tu archivo se llama de otra forma en tu carpeta public
                'image_path' => 'img/proyectos/agropai/pageAgropai.webp' 
            ]);
        }
        
        // Puedes replicar este bloque para cualquier otro proyecto que necesite carrusel
    }
}