<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    protected $fillable = [
        'resultado_id',
        'jugador_id',
        'equipo_id'
    ];  

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function jugador()
    {
        return $this->belongsTo(Jugador::class);
    }

    public function resultado()
    {
        return $this->belongsTo(Resultado::class);
    }
}
