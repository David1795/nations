<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    //tabla a conectar
    protected $table = "countries";
    // la clave primaria de la tabla
    protected $primaryKey = "country_id";
    // omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;

   
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }

    
    public function idiomas(){
        return $this->belongsToMany(Language::class,
        'country_languages','country_id','Language_id');
    }
}


