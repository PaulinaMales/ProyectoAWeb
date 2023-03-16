@extends('template')

@section('content')

<h1>LISTADO DE MIS POST</h1>
    @foreach ($posts as $post)
    <p>
       <!-- Trabajado como arreglo
        <strong> {{$post['id']}}</strong>-->

        <!-- Ahora como objeto propiedad-->
        <strong> {{$post->id}}</strong>
        <a href="{{route('post', $post['slug'])}}">
        {{$post->title}}
        </a>
        <!--Mostrar la relacion de las tablas -->
        <br>
        <span>{{$post->user->name}}</span>
        
    </p>
    @endforeach

    <!-- Mostrar paginacion -->
    {{$posts->links()}}
@endsection



   
