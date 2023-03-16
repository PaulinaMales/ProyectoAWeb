@extends ('layouts.template')

@section('subtitle', 'Editar')

@section('content')
<form action="{{ url('/menu/'.$platillo -> id )}}" method="post" enctype="multipart/form-data" class="container mx-auto bordered-solid rounded-lg  w-96 my-1" > 
    @csrf
    {{ method_field('PATCH') }}
    @include('menu.form',['mood'=>'Guardar'])
</form>
@endsection