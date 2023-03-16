<?php

namespace App\Http\Controllers\Presidente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#Se debe importar el modelo para poder manejar la base de datos 
use App\Models\User;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;

class formPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('presidente.formPlayer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'apellido' => $request->apellido,
            'edad' => $request->edad,
            'equipo_team' => $request->equipo,
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'posicion' => $request->input("posiciones"),
            'usuario_id' => $user_id,
        ]);

        return redirect()->route('presidente.crudPlayer.create')->with('success', 'Jugador Registrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
