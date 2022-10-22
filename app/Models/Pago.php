<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $monto
 * @property $banco_id
 * @property $cuenta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Banco $banco
 * @property Cuenta $cuenta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'monto' => 'required',
		'banco_id' => 'required',
		'cuenta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monto','banco_id','cuenta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Models\Banco', 'id', 'banco_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'cuenta_id');
    }
    

}
