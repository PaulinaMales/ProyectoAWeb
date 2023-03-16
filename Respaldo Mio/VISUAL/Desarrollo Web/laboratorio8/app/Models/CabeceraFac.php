<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabeceraFac extends Model
{
    use HasFactory;

     // RELACIÓN DE UNO A MUCHOS
     public function cabeceraFac()
     {
     return $this->hasMany(Factura::class);
     }




}
