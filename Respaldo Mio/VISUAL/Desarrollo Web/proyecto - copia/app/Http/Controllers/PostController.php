<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar para el Post
use App\Models\Post;

//Importar para el Str
use Illuminate\Support\Str;

use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //--------- EXTRAE LA INFORMACION ------------
    public function index(){
                // carpeta/vista
        return view('posts.index',
        [
            //funcion index
            'posts'=>Post::latest()->paginate()
        ]
    
    );
    }

    //--------- FUNCION/METODO ELIMINAR ------------
    public function destroy(Post $post){
        $post -> delete();
        return back();
    }

    //--------- FUNCION/METODO CREAR ------------
    public function create(Post $post){
        // carpeta/vista
        return view('posts.create',
        [
            'post'=>$post
        ]);

        }

    //--------- FUNCION/METODO GUARDAR------------
    public function store(Request $request){

        // -- VALIDACIONES --
        $request-> validate([
            'title'=>'required',
        //Verificar que los contenidos no sean iguales, que sean UNICOS(TITULO)
            'slug' => 'required|unique:posts,slug' ,

            'body'=> 'required',
        ]);

        $post = $request->user()->posts()->create(
            [
                'title'=> $request->title,
                'slug' => $request->slug,
                'body' => $request-> body,

            ]
        );
        return redirect()->route('posts.edit', $post);
        }


    //--------- FUNCION/METODO EDITAR------------
    public function edit(Post $post){
        // carpeta/vista
        return view('posts.edit',
        [
            'post'=>$post
        ]);
        }
    //--------- FUNCION/METODO ACTUALIZAR------------
    public function update(Request $request, Post $post){

        // -- VALIDACIONES --
        $request-> validate([
            'title'=>'required',
        /*Verificar que los contenidos no sean iguales, pero en este cado puede repetirse 
        pero en ese ID UNICO*/
            //'slug' => 'required|unique:posts,slug' . $post->id,
            'slug'=>[
                'required',Rule::unique('posts','slug')->ignore($post->id)
            ],

            'body'=> 'required',
        ]);

        $post->update(
            [
                'title'=> $request->title,
                'slug' => $request->slug,
                'body' => $request-> body,

            ]
        );
        return redirect()->route('posts.edit', $post);
        }

        


}
