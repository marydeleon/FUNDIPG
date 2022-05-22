<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instructorevent
 *
 * @property $id
 * @property $id_evento
 * @property $id_instructor
 * @property $created_at
 * @property $updated_at
 *
 * @property Event $event
 * @property Instructor $instructor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instructorevent extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evento','id_instructor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne('App\Models\Event', 'id', 'id_evento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function instructor()
    {
        return $this->hasOne('App\Models\Instructor', 'id', 'id_instructor');
    }
    

}
