<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    //RELACION MUCHOS A MUCHOS
    public function libro(){
        return $this->belongsTo(libro::class)->withDefault();

    }
}
