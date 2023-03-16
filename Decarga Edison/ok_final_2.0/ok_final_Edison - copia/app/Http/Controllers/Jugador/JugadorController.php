<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;

class JugadorController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('soloplayer',['only'=> ['index']]);
    // }

    public function index()
    {
        return view('jugador.player');
    }
/*
    public function store(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => 3
        ]);

        $usuario_creado = User::where('email', $user->email)->get();
        $user_id = $usuario_creado[0]->id;

        $player = Jugador::create([
            'edad' => $request->edad,
            'equipo' => $request->equipo,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'posicion' => $request->input("posiciones"),
            'usuario_id' => $user_id,
        ]);
    }*/
}