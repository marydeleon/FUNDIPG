<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Classroom
 *
 * @property $id
 * @property $nombre
 * @property $aforo_total
 * @property $aforo_restante
 * @property $diponibilidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Classroom extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'aforo_total' => 'required',
		'aforo_restante' => 'required',
		'diponibilidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','aforo_total','aforo_restante','diponibilidad'];



}
