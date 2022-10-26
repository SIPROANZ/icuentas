<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socio
 *
 * @property $id
 * @property $nombre
 * @property $capital
 * @property $utilidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'capital' => 'required',
		'utilidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','capital','utilidad'];



}
