<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property $id
 * @property $nombre
 * @property $id_horario
 * @property $id_salon
 * @property $created_at
 * @property $updated_at
 *
 * @property Classroom $classroom
 * @property Hour $hour
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends Model
{

    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','id_horario','id_salon','costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function classroom()
    {
        return $this->hasOne('App\Models\Classroom', 'id', 'id_salon');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hour()
    {
        return $this->hasOne('App\Models\Hour', 'id', 'id_horario');
    }


}
