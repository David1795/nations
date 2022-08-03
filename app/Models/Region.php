<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     //tabla a conectar
     protected $table = "regions";
     // la clave primaria de la tabla
     protected $primaryKey = "region_id";
     // omitir campos de auditoria
     public $timestamps = false;
 
    use HasFactory;

    public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }

    public function continente(){
        return $this->belongsTo(Continent::class,'continent_id');
    }
}
