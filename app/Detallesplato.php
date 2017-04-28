<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallesplato extends Model
{
	protected $table = 'detallesplato';
	public $primaryKey = 'id_detalles';
    protected $fillable = ['platillo', 'ingredientes'];
    public $timestamps = false;
}
