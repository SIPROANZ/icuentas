<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingresosbanco
 *
 * @property $id
 * @property $monto
 * @property $banco_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Banco $banco
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingresosbanco extends Model
{
    
    static $rules = [
    'concepto' => 'required',
		'monto' => 'required',
		'banco_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['concepto','monto','banco_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Models\Banco', 'id', 'banco_id');
    }
    

}
