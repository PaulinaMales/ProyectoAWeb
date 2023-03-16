<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    use HasFactory;

    protected $table = 'sanciones';

    protected $fillable = [
        'jugador_id',
        'equipo_id',
        'presidente_id',
        'partido_id',
        'descripcion',
        'tipo_sancion',
        'gravedad_sancion',
        'sancion_cumplida'
    ]; 


    public function jugador()
        {
            return $this->belongsTo(Jugador::class);
        }

        public function equipo()
        {
            return $this->belongsTo(Equipo::class);
        }

        public function presidente()
        {
            return $this->belongsTo(Presidente::class);
        }

        public function partido()
        {
            return $this->belongsTo(Partido::class);
        }


}
