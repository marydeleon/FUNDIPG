<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instructor
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $direccion
 * @property $curso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instructor extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'curso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','telefono','direccion','curso'];



}
