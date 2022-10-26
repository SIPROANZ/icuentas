<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sociopago
 *
 * @property $id
 * @property $monto
 * @property $concepto
 * @property $socio_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Socio $socio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sociopago extends Model
{
    
    static $rules = [
		'monto' => 'required',
		'concepto' => 'required',
		'socio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto','concepto','socio_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function socio()
    {
        return $this->hasOne('App\Models\Socio', 'id', 'socio_id');
    }
    

}
