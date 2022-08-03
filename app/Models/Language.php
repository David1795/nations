<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
       //tabla a conectar
       protected $table = "languages";
       // la clave primaria de la tabla
       protected $primaryKey = "language_id";
       // omitir campos de auditoria
       public $timestamps = false;
   
       use HasFactory;
   
       public function paises(){
           return $this->belongsToMany(Country::class,
           'country_languages','Language_id','country_id');
       }

       
    use HasFactory;
}
