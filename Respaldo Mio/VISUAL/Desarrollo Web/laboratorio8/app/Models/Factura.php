<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    //RELACION UNO-UNO 

    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    
    //RELACION UNO-MUCHOS
    public function factura(){
        return $this->belongsTo(cabeceraFac::class);
    }

}
