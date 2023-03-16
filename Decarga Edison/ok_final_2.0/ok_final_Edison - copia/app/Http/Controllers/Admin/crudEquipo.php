<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#Se debe importar el modelo para poder manejar la base de datos 
use App\Models\Equipo;

#Para poder almacenar en Cloudinary
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class crudEquipo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        //
        return view('admin.crudEquipo');
    }*/

    public function index()
    {
        $equipos = Equipo::all();
        return view('admin.crudEquipo', compact('equipos'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.equipo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'anios' => 'required|integer|min:0',
            'fecha_fundacion' => 'required|date',
            'imagen' => 'image|max:2048', // validar que la imagen sea un archivo de imagen y que no sea mayor a 2MB
        ]);
    
        // Crear un nuevo equipo con los datos del formulario
        $equipo = new Equipo;
        $equipo->nombre = $validated['nombre'];
        $equipo->anios = $validated['anios'];
        $equipo->fecha_fundacion = $validated['fecha_fundacion'];
    
        // Procesar la imagen del formulario si se ha proporcionado
        if ($request->hasFile('imagen')) {
            // Subir la imagen a Cloudinary
            $result = Cloudinary::upload($request->file('imagen')->getRealPath(),['folder'=>'Logos']);
    
            $equipo->imagen = $result->getSecurePath();
        }
    
        // Guardar el equipo en la base de datos
        $equipo->save();
    
        // Redirigir a la página de edición del equipo recién creado
        return redirect()->route('admin.crudEquipo.create', ['equipo' => $equipo->id])->with('success', 'El equipo ha sido registrado correctamente.');
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
    /*public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('admin.editEquipo', compact('equipo'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'anios' => 'required|integer|min:0',
            'fecha_fundacion' => 'required|date',
            'imagen' => 'image|max:2048', // validar que la imagen sea un archivo de imagen y que no sea mayor a 2MB
        ]);
    
        $equipo = Equipo::findOrFail($id);
        $equipo->nombre = $validated['nombre'];
        $equipo->anios = $validated['anios'];
        $equipo->fecha_fundacion = $validated['fecha_fundacion'];
    
        if ($request->hasFile('imagen')) {
            $result = Cloudinary::upload($request->file('imagen')->getRealPath(),['folder'=>'Logos']);
            $equipo->imagen = $result->getSecurePath();
        }
    
        $equipo->save();
    
        return redirect()->route('admin.crudEquipo', ['equipo' => $equipo->id])->with('success', 'El equipo ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Buscar el equipo por su id
        $equipo = Equipo::findOrFail($id);
    
        // Eliminar la imagen de Cloudinary si existe
        if ($equipo->imagen) {
            $publicId = pathinfo($equipo->imagen)['filename'];
            Cloudinary::destroy($publicId);
        }
    
        // Eliminar el equipo de la base de datos
        $equipo->delete();
    
        // Redirigir a la página de lista de equipos

        return redirect()->route('admin.crudEquipo')->with('delete', 'El equipo ha sido eliminado correctamente.');
    }
    
}
