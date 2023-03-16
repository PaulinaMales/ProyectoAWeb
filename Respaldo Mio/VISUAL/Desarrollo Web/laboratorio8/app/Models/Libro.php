<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    //RELACION UNO A UNO 
    public function factura(){
        return $this->hasOne(Libro::class);
    }

    //RELACION UNO A MUCHOS
    public function tipoLibro(){
        return $this->belongsTo(TipoLibro::class);
    
    }

    //RELACION MUCHOS A MUCHOS

    public function Autors(){
        return $this->belongsToMany(Autor::class)->withTimestamps();
        
    }


}
