<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoLibro extends Model
{
    use HasFactory;
    //RELACION UNO A Muchos
    public function Libro(){
        return $this->hasMany(Libro::class);
    }

}
