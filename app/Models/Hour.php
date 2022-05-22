<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hour
 *
 * @property $id
 * @property $fecha
 * @property $inicio
 * @property $fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hour extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'inicio' => 'required',
		'fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','inicio','fin'];



}
