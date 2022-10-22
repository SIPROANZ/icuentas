<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingresoscuenta
 *
 * @property $id
 * @property $monto
 * @property $cuenta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta $cuenta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingresoscuenta extends Model
{
    
    static $rules = [
		'monto' => 'required',
		'cuenta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto','cuenta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'cuenta_id');
    }
    

}
