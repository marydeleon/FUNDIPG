<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Eventestudent
 *
 * @property $id
 * @property $id_evento
 * @property $id_estudiante
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Event $event
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Eventestudent extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evento','id_estudiante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne('App\Models\Event', 'id', 'id_evento');
    }
    

}
