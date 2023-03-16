<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidentTeam extends Model
{
    use HasFactory;
     /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $table='president_teams';
    protected $keyType='string';
    /**
    * The primary key associated with the table.
    *
    * @var string
    */
    protected $incrementing = false;
    protected $primaryKey='code_team_president';

    //! RELACIÓN DE UNO A UNO
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}