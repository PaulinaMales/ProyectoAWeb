<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar el modelo 
use App\Models\Post;

class PageController extends Controller
{
    //
    public function home() {
        return view('home');
     }

     public function blog() {
        //consulta a la base de datos
        //$posts =[
          // ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
          // ['id'=>2, 'title'=>'LARAVEL', 'slug'=>'laravel']
       // ];

      //Guardamos en la variable y traemos los datos
      //$posts= Post::get();


     //Funcion elocuent (Primera)  //Post::find(25)
      //$posts= Post::first();
      //imprimr 
      //dd($posts);

      /* --- PAGINACION ---*/
      $posts=Post::latest()->paginate();
      //dd($posts);
        return view('blog',['posts'=>$posts]);
     }

     public function post(Post $post) {
        //consulta a la base de datos
       // $post = $slug;

        ///recibimos la variable
        return view('post', ['post'=>$post]);
     }
}

