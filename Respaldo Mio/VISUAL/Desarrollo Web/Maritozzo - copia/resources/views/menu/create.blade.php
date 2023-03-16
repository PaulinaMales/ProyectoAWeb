@extends ('layouts.template')

@section('subtitle', 'Crear')

@section('content')
<form action="{{url('/menu')}}" method="post" enctype="multipart/form-data" class="container mx-auto bordered-solid rounded-lg  w-96 my-5" >
    @csrf  
    @include('menu.form',['mood'=>'Crear'])
</form>
@endsection