<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
        'apellido',
        'edad',
        'usuario_id',
        'equipo_team',
        'direccion',
        'celular',
        'posicion',
        'num_camiseta'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

        //Establecemos relacion con la tabla equipos 
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
        

    public function gol()
    {
        return $this->hasMany(Gol::class);
    }

    public function sancion()
    {
        return $this->hasMany(Sancion::class);
    }

        
}
