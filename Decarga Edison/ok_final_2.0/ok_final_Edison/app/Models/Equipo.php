<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'anios',
        'fecha_fundacion',
        'imagen'
    ];    
  
    //Establecemos la relacion con presidentes
    public function presidente()
    {
        return $this->hasMany(Presidente::class);
    }

    public function jugador()
    {
        return $this->hasOne(Jugador::class);
    }
    

    public function partido()
    {
        return $this->hasMany(Partido::class);
    }

    public function resultado()
    {
        return $this->hasMany(Resultado::class);
    }
    


}
