<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /**
     * La tabla asociada al modelo.
     * Por defecto Laravel busca el plural ('projects'), pero definirlo explícitamente es una buena práctica.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * Atributos que se pueden asignar de forma masiva (Mass Assignment).
     * Esto es una medida de seguridad de Laravel para controlar qué campos se pueden rellenar de golpe.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'page_image_path',
        'url',
    ];

    /**
     * Relación: Un proyecto tiene muchas imágenes en el carrusel
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }
}