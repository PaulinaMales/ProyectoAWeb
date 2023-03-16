<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


#Se debe importar el modelo para poder manejar la base de datos 
use App\Models\User;
use App\Models\Presidente;
use Illuminate\Support\Facades\Hash;

class crudPresident extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function index()
    {
        return view('admin.crudPresident');
    }
    
    
     public function index()
{
    $presidentes = Presidente::with('user', 'equipo')->get();

    return view('admin.crudPresident', compact('presidentes'));

    
}   
    
    */

    
    public function index()
    {
        $presidentes = DB::table('presidentes')
            ->join('users', 'users.id', '=', 'presidentes.usuario_id')
            ->join('equipos', 'equipos.id', '=', 'presidentes.equipo_id')
            ->select('users.name', 'users.email', 'presidentes.id', 'equipos.nombre as nombre_equipo', 
            'presidentes.apellido','presidentes.edad','presidentes.direccion','presidentes.celular')
            ->get();   
        return view('admin.crudPresident', compact('presidentes'));
    }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('admin.formPresident');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

        public function store(Request $request)
            {

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'rol_id' => 2
                ]);

                $presidente = Presidente::create([
                    'apellido' => $request->apellido,
                    'edad' => $request->edad,
                    'direccion' => $request->direccion,
                    'celular' => $request->celular,
                    'equipo_id' => $request->equipo_id,
                    'usuario_id' => $user->id,
                ]);

                return redirect()->route('admin.crudPresident.create')->with('success', 'Presidente creado con éxito');
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
            $presidente = Presidente::find($id);
            return view('admin.crudPresident', compact('presidente'));
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
            
            $presidente = Presidente::findOrFail($id);
            $user = User::findOrFail($presidente->usuario_id);
            $user->name = $request->name;
            $user->save();

            $presidente->apellido = $request->apellido;
            $presidente->edad = $request->edad;
            $presidente->equipo_id = $request->equipo_id;
            $presidente->direccion = $request->direccion;
            $presidente->celular = $request->celular;
            $presidente->save();
            
            return redirect()->route('admin.crudPresident')->with('success', 'Presidente Actualizado!');
        }

   
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $presidente = Presidente::findOrFail($id);
            $user = User::findOrFail($presidente->usuario_id);
        
            $presidente->delete(); // Primero elimina el presidente de la tabla presidentes
        
            $user->delete(); // Luego elimina el usuario de la tabla users
        
            return redirect()->route('admin.crudPresident')->with('delete', 'Presidente eliminado!');
        }
        
        
        
        

}
