<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones (creación de la tabla).
     */
    public function up(): void
    {
        // Define la estructura de la tabla 'projects' en MySQL
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // ID autoincremental (Clave primaria)
            
            $table->string('title'); // Título del proyecto (VARCHAR estándar)
            
            $table->text('description'); // Descripción corta (TEXT, permite más caracteres que string)
            
            $table->string('image_path')->nullable(); // Ruta local o URL de la imagen (puede ser nulo temporalmente)

            $table->string('page_image_path')->nullable(); // Ruta local de la imagen Page
            
            $table->string('url')->nullable(); // Enlace al proyecto en vivo o repositorio (puede ser nulo)
            
            $table->timestamps(); // Crea automáticamente las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Revierte las migraciones (elimina la tabla si es necesario).
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};