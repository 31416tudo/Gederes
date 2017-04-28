<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table='orden';
    public $primaryKey = 'id_orden';
    protected $fillable = ['comentarios', 'cliente', 'estatus'];
    public $timestamps = [ "created_at" ];
}
