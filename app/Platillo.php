<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
	protected $table='platillo';
    public $primaryKey = 'nombrePlatillo';
    public $incrementing = false;
    protected $fillable = ['nombrePlatillo', 'descripcion', 'tipo', 'precio', 'imagen'];
    public $timestamps = false;
}
