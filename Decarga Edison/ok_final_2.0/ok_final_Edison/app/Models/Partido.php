<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'tipo_partido',
        'equipo_local',
        'equipo_visitante',
        'ubicacion'
    ]; 


    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }

    public function resultado()
    {
        return $this->hasOne(Resultado::class);
    }
}
