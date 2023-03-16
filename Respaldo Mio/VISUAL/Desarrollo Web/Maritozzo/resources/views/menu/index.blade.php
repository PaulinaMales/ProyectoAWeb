@extends ('layouts.template')

@section('subtitle', 'Ver')

@section('content')
@if(Auth::user()->id == 1 )

@if (Session::has('mensaje'))
<div class="p-4 mb-4 mx-12 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
  <span class="font-medium">{{ Session::get('mensaje') }} </span> 
</div>
@endif

<div class="flex justify-end">
  <a class="btn btn-accent m-4 bg-emerald-300 px-10 hover:bg-emerald-500 hover:border-inherit border-inherit" href="{{url('menu/create')}}"><img src="{{asset ('storage/add-icon.png')}}" alt="add.svg" class="w-12 p-2"></a>
</div>
<!--Search-->
<form action="{{url('/menu')}}" method="get" class="flex items-center justify-start lg:mx-48 w-3/12">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </div>
      <input type="text" name="texto" id="simple-search" value="{{$texto}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Buscar" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      <span class="sr-only">Buscar</span>
    </button>
</form>
<!--End Search-->
<!--Table-->
 <h1 class="text-extrabold text-green-500 text-center text-2xl py-6"> Lista de platos </h1>
  <div class="container mx-auto px-12 md:px-48 lg:px-48">
    <table class="table w-full border-separate border-spacing-2 table-fixed">
      <!-- head -->
      <thead>
        <tr class="text-center">
          <th class="border border-cyan-500 bg-white w-1/6">N°</th><!--Id-->
          <th class="border border-cyan-500 bg-white w-1/6">Imagen</th>
          <th class="border border-cyan-500 bg-white w-1/6">Nombre Platillo</th>
          <th class="border border-cyan-500 bg-white w-2/6">Descripción</th>
          <th class="border border-cyan-500 bg-white w-1/6">Precio</th>
          <th class="border border-cyan-500 bg-white w-1/6">Acciones</th>
        </tr>
      </thead>
    <tbody class="text-center">
      @if (count($platillos)<=0)
        <tr>
          <td class="font-extrabold text-blue-500">
            No se encontro ningún registro
          </td>
        </tr>
      @else
      <!-- row 1 -->
      @foreach ($platillos as $plato)
      <tr>
        <td class="border  border-green-500">{{$plato -> id}}</td>
        <td class="border  border-green-500">
          <img src="{{asset ('storage').'/'.$plato->image}}" alt="platillo">
        </td>
        <td class="border  border-green-500">{{$plato -> name}}</td>
        <td class="border  border-green-500 break-words"><p class="text-ellipsis overflow-hidden">{{$plato -> description}}</p></span></td>
        <td class="border  border-green-500">{{$plato -> price}}</td>
        <td>
        <a class="btn my-2 bg-blue-700 hover:bg-blue-800 text-white hover:border-inherit border-inherit" href="{{ url('/menu/'.$plato->id.'/edit')}}">
            <img src="{{asset ('storage/edit-icon.png')}}" alt="edit.svg">
            Editar 
          </a>


          <form action="{{ url('/menu/'.$plato->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn my-2 bg-red-500 hover:bg-red-700 text-white hover:border-inherit border-inherit" onclick="return confirm('Desea eliminar?')" value="BORRAR">
              <img src="{{asset ('storage/delete-icon.png')}}" alt="delete.svg" class="mr-1">
              BORRAR
            </button>
          </form>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
    </table>
</div>
<!-- End div Table-->
@else
    <!--Title-->
    <h1 class="text-center text-5xl py-8 pt-12 mt-12 font-extrabold font-['Open_Sans']">MENU</h1>
    <!--Food-->
    
    <div class="grid justify-items-center gap-5 px-4 mt-6">
    @foreach ($platillos as $plato)
      <div class="flex px-5">    
        <div class="card w-64  glass">
          <figure class="p-4"><img src="{{asset ('storage').'/'.$plato->image}}" alt="palto" class="rounded-xl w-96"/></figure>
              <div class="card-body">
                  <!--Name-->
                  <h2 class="card-title">{{$plato -> name}}</h2>
                  <!--Description-->
                  <p>{{$plato -> description}}</p>
                  <!--Price-->
                  <span class="font-extrabold">{{$plato -> price}}</span>
                  <!--Button add-->
                  <div class="card-actions justify-end">
                  <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}" class="px-2"/>Añadir</button>
              </div>
        </div>
      </div>
      @endforeach
    </div>
        
    </div>
@endif
@endsection
