<?php

namespace App\Http\Controllers\Presidente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Presidente;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class crudPlayer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function dashboard()
     {
         $user = Auth::user();
         $presidente = Presidente::where('usuario_id', $user->id)->first();
         $equipo = Equipo::find($presidente->equipo_id);
         return view('presidente.president', compact('equipo'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /*    public function index()
    {
        $user = Auth::user();
        $presidente = Presidente::where('usuario_id', $user->id)->first();
        $jugadores = Jugador::where('equipo_team', $presidente->equipo_id)->get();
        return view('presidente.crudPlayer', compact('jugadores'));
    }
 */

            public function index()
            {
                $user = Auth::user();
                $presidente = Presidente::where('usuario_id', $user->id)->first();
            
                $jugadores = DB::table('jugadors')
                    ->join('users', 'users.id', '=', 'jugadors.usuario_id')
                    ->where('jugadors.equipo_team', $presidente->equipo_id)
                    ->select('users.name', 'users.email', 'jugadors.id', 'jugadors.apellido','jugadors.edad','jugadors.celular','jugadors.direccion','jugadors.equipo_team','jugadors.posicion','jugadors.num_camiseta')
                    ->get();   
            
                return view('presidente.crudPlayer', compact('jugadores'));
            }
 

        public function create()
        {
            $user = Auth::user();
            $presidente = Presidente::where('usuario_id', $user->id)->first();
            $equipo = Equipo::findOrFail($presidente->equipo_id);
            return view('presidente.formPlayer',compact('equipo'));
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
            'equipo_team' => $request->equipo_team, // Establecer el ID del equipo del presidente como valor predeterminado
            'direccion' => $request->direccion,
            'celular' => $request->celular,
            'posicion' => $request->input("posiciones"),
            'num_camiseta' => $request->num_camiseta,
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
        $jugador = Jugador::findOrFail($id);
        return view('presidente.crudPlayer', compact('jugador'));
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
         $jugador = Jugador::findOrFail($id);
         $user = User::findOrFail($jugador->usuario_id);
         
         $user->name = $request->name;
         $user->save();
     
         $jugador->apellido = $request->apellido;
         $jugador->edad = $request->edad;
         $jugador->direccion = $request->direccion;
         $jugador->celular = $request->celular;
         $jugador->num_camiseta = $request->num_camiseta;
         $jugador->posicion = $request->input("posiciones");
         $jugador->save();
     
         return redirect()->route('presidente.crudPlayer')->with('success', 'Jugador Actualizado!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jugador = Jugador::findOrFail($id);
        $user = User::findOrFail($jugador->usuario_id);
        
        $jugador->delete();
        $user->delete();
    
        return redirect()->route('presidente.crudPlayer')->with('delete', 'Jugador Eliminado!');
    }
}
