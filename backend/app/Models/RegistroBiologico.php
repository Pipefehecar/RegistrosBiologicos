<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroBiologico extends Model
{
    use HasFactory;

    protected $table = "registros_biologicos";

    protected $fillable = [
      'familia',
      'nombre_comun',
      'proyecto',
      'base_registro',
      'identificacion_year',
      'departamento',
      'municipio',
      'localidad',
      'latitud',
      'longitud',
      'autor',
      'fecha_captura',
      'ecoregion',
    ];
}
