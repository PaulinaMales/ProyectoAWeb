<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#Se debe importar el modelo para poder manejar la base de datos 
use App\Models\Equipo;
use App\Models\Partido;
use App\Models\Resultado;
use App\Models\Jugador;

use Illuminate\Support\Facades\DB;


class crudPartido extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        $partidos = DB::table('partidos')
            ->join('equipos as el', 'partidos.equipo_local', '=', 'el.id')
            ->join('equipos as ev', 'partidos.equipo_visitante', '=', 'ev.id')
            ->join('resultados', 'resultados.partido_id', '=', 'partidos.id')
            ->select('partidos.fecha','partidos.id', 'partidos.tipo_partido', 'partidos.equipo_local', 'el.nombre as nombre_equipo_local', 
            'partidos.equipo_visitante', 'ev.nombre as nombre_equipo_visitante', 'partidos.ubicacion', 'resultados.partido_id',
            'resultados.equipo_local_goles', 'resultados.equipo_visitante_goles')
            ->get();   

        return view('admin.crudPartido', compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $jugadores = Jugador::all();
        return view('admin.formPartido', compact('equipos', 'jugadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
        public function store(Request $request)
        {
            // Validar los datos
    
            // Crear un nuevo Partido
            $partido = new Partido;
            $partido->fecha = $request->fecha;
            $partido->tipo_partido = $request->tipo_partido;
            $partido->equipo_local = $request->equipo_local;
            $partido->equipo_visitante = $request->equipo_visitante;
            $partido->ubicacion = $request->ubicacion;
            $partido->save();
    
            // Crear un nuevo Resultado
            $resultado = new Resultado;
            $resultado->partido_id = $partido->id;
            $resultado->equipo_local_goles = $request->equipo_local_goles;
            $resultado->equipo_visitante_goles = $request->equipo_visitante_goles;
            $resultado->save();
    
            // Redirigir a la página de inicio
            return redirect()->route('admin.crudPartido.create')->with('success', 'El Registro ha sido guardado correctamente.');
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
        $partido = Partido::find($id);
        $equipos = Equipo::all();
        return view('admin.crudPartido', compact('partido', 'equipos'));
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
        // Validar los datos
        
        // Obtener el partido correspondiente al id proporcionado
        $partido = Partido::find($id);
        $partido->fecha = $request->fecha;
        $partido->tipo_partido = $request->tipo_partido;
        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->ubicacion = $request->ubicacion;
        $partido->save();
    
        // Actualizar el resultado correspondiente al partido
        $resultado = Resultado::where('partido_id', $id)->first();
        $resultado->equipo_local_goles = $request->equipo_local_goles;
        $resultado->equipo_visitante_goles = $request->equipo_visitante_goles;
        $resultado->save();
    
        // Redirigir a la página de inicio
        return redirect()->route('admin.crudPartido.index')->with('success', 'El Registro ha sido actualizado correctamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtener el partido correspondiente al id proporcionado
        $partido = Partido::find($id);
    
        // Eliminar el resultado correspondiente al partido
        $resultado = Resultado::where('partido_id', $id)->first();
        $resultado->delete();
    
        // Eliminar el partido
        $partido->delete();
    
        // Redirigir a la página de inicio
        return redirect()->route('admin.crudPartido.index')->with('delete', 'El Registro ha sido eliminado correctamente.');
    }
    
}
