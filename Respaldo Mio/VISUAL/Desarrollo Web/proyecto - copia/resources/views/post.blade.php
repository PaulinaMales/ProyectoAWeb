
@extends('template')

@section('content')

 <!--OBJETO/PROPIEDAD -->
<h1>{{$post->title}}</h1>

<p>
    {{$post->body}}
</p>
@endsection


