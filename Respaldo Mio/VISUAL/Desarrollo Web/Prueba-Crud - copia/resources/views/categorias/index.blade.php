
@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('categorias.create')}}" class="btn btn-primary">CREAR</a>

    <div class="row justify-content-center">
  

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">C R U D</div>  
                <br>
                <div class="d-md-flex justify-content-md-emd" style="margin-left:320px;">
                    <form action="{{route('categorias.index')}}" method="get">
                        <div class="btn-group">
                            <input type="text" name="busqueda" class="form-control" placeholder="Buscar">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>opciones</th>

                    </thead>

                    <tbody>

                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->codigo}}</td>
                                <td>{{$categoria->nombre}}</td>
                                <td class="btn-group">
                                    <a href="{{route('categorias.show',$categoria->id)}}" class="btn btn-primary">Ver</a>                       
                                    <a href="{{route('categorias.edit',$categoria->id)}}" class="btn btn-warning" >Editar</a> 

                                    <form action="{{route('categorias.destroy',$categoria->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">{{$categorias->appends(['busqueda'=>$busqueda])}}</td>
                        </tr>
                    </tfoot>
                </table>


            </div>
        </div>
    </div>
</div>
@endsection
