<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = empresas;
    protected $fillable = ['razon_social','nit','direccion','telefono','estado_id'];
}
