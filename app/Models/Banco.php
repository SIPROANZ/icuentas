<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 *
 * @property $id
 * @property $nombre
 * @property $saldo
 * @property $tipocambio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Banco extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'saldo' => 'required',
		'tipocambio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','saldo','tipocambio'];



}
