<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use App\Models\Equipo; // Importa el modelo Equipo
use App\Models\Jugador; // Importa el modelo Jugador
use App\Models\Sancion; // Importa el modelo Sancion
use App\Models\Partido;
use App\Models\Presidente;


class crudSancion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index(Request $request)
    {
        $equipos = Equipo::all();
        $jugadores = null;
        $equipo_id = $request->old('equipo_id'); //recupera el valor seleccionado anteriormente
    
        //if ($request->has('equipo_id')) {
            //$jugadores = Jugador::where('equipo_team', $request->input('equipo_id'))->get();
        //}


        if ($request->has('equipo_id')) {
            $jugadores = DB::table('jugadors')
                ->join('equipos', 'equipos.id', '=', 'jugadors.equipo_team')
                ->where('equipos.id', $request->input('equipo_id'))
                ->select('jugadors.id', 'jugadors.posicion', 'jugadors.num_camiseta', 'equipos.nombre as nombre_equipo')
                ->get();
            $nombre_equipo = Equipo::find($request->input('equipo_id'))->nombre; //obtiene el nombre del equipo seleccionado
        }
    
        return view('admin.crudSancion', compact('equipos', 'jugadores', 'equipo_id','nombre_equipo'));
    }*/




public function index()
{
    $sanciones = DB::table('sanciones')
        ->join('jugadors', 'jugadors.id', '=', 'sanciones.jugador_id')
        ->select('jugadors.num_camiseta', 'jugadors.posicion', 'sanciones.tipo_sancion', 
        'sanciones.sancion_cumplida','sanciones.gravedad_sancion','jugadors.id','sanciones.descripcion','sanciones.id')
        ->get();   
    return view('admin.crudSancion', compact('sanciones'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        $equipos = Equipo::all();
        $jugadores = null;
        $equipo_id = $request->old('equipo_id'); //recupera el valor seleccionado anteriormente
        $nombre_equipo = '';
        
        if ($request->has('equipo_id')) {
            $jugadores = DB::table('jugadors')
                ->join('equipos', 'equipos.id', '=', 'jugadors.equipo_team')
                ->where('equipos.id', $request->input('equipo_id'))
                ->select('jugadors.id', 'jugadors.posicion', 'jugadors.num_camiseta', 'equipos.nombre as nombre_equipo')
                ->get();
            $nombre_equipo = Equipo::find($request->input('equipo_id'))->nombre; //obtiene el nombre del equipo seleccionado
        }
    
        return view('admin.formSancion', compact('equipos', 'jugadores', 'equipo_id','nombre_equipo'));

    }
  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //
        $jugador_id = $request->input('jugador_id'); // Obtener el ID del jugador seleccionado
        //$equipo_id = $request->input('equipo_id');//
        
        $sancion = new Sancion;
        $sancion->descripcion = $request->input('descripcion');
        $sancion->tipo_sancion = $request->input('tipo_sancion');
        $sancion->gravedad_sancion = $request->input('gravedad_sancion');
        $sancion->sancion_cumplida = $request->input('sancion_cumplida');
        $sancion->jugador_id = $jugador_id; // Asignar la sanción al jugador correspondiente
        $sancion->save();
    
        //return redirect()->back()->with('success', 'Sanción agregada correctamente');
        return redirect()->route('admin.formSancion.create')->with('success', 'Sanción agregada correctamente!');
    }

    public function update(Request $request, $id)
        {
            // Obtener el ID del jugador seleccionado

            $sancion = Sancion::findOrFail($id);
            $sancion->descripcion = $request->input('descripcion');
            $sancion->tipo_sancion = $request->input('tipo_sancion');
            $sancion->gravedad_sancion = $request->input('gravedad_sancion');
            $sancion->sancion_cumplida = $request->input('sancion_cumplida');
            $sancion->save();

            //return redirect()->back()->with('success', 'Sanción actualizada correctamente');
            return redirect()->route('admin.crudSancion.index')->with('success', 'Sanción actualizada correctamente!');
        }

     public function edit($id)
    {
        //
        $sancion = Sancion::findOrFail($id);
        return view('admin.crudSancion', compact('sanciones'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sancion = Sancion::findOrFail($id);
        $sancion->delete();
    
        return redirect()->back()->with('delete', 'Sanción eliminada correctamente');
    }
    
}
