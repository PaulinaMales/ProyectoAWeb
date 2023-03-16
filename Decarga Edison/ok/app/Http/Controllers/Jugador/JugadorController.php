<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloplayer',['only'=> ['index']]);
    }

    public function index()
    {
        return view('jugador.player');
    }



}
