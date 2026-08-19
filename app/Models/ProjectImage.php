<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImage extends Model
{
    /**
     * La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'project_images';

    /**
     * Atributos asignables de forma masiva.
     * Sin esto, cualquier Seeder o método Create() fallará silenciosamente dentro de Sail.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'image_path',
    ];

    /**
     * Relación inversa: Cada imagen pertenece a un único proyecto.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}