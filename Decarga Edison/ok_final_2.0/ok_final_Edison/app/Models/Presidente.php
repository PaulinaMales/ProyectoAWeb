<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;

    protected $fillable = [    
        'apellido',
        'edad',
        'usuario_id',
        'equipo_id',
        'direccion',
        'celular'
    ];


    /*
        public function user()
        {
            return $this->belongsTo(User::class, 'usuario_id');
        }
*/
public function user()
    {
        return $this->belongsTo(User::class);
    }


    //Establecemos relacion con la tabla equipos 
    public function equipo()
        {
            return $this->belongsTo(Equipo::class);
        }

}
