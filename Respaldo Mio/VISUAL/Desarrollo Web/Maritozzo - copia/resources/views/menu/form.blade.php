@if(count($errors)>0)
    <div class="alert alert-error shadow-lg">
    <div>
        <ul>
            @foreach( $errors -> all() as $error)
            <li class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{$error}}</span>
            </li>
            @endforeach
        </ul>
    </div>
    </div>
@endif
<div class="form-control w-full max-w-screen-2xl px-8  container mx-auto">
    <label class="label">
        <span class="label-text font-extrabold ">Nombre Platillo:</span>
    </label>
    <input type="text" name="name" value="{{ isset($platillo -> name)?$platillo->name:old('name')}}" placeholder="Escriba aquí" class="input input-bordered text-black w-full max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold">Descripción: </span>
    </label>
    <input type="text" name="description" value="{{ isset($platillo -> description)?$platillo->description:old('description')}}" placeholder="Escriba aquí" class="text-center input input-bordered text-black w-full h-60 max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold ">Precio:</span>
    </label>
    <input type="decimal" name="price" value="{{ isset($platillo -> price)?$platillo->price:old('price')}}" placeholder="Escriba aquí" class="input input-bordered text-black w-full max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold "> Imagen:</span>
    </label>
    @if(isset($platillo->image))
    <img src="{{asset ('storage').'/'.$platillo->image}}" alt=""/>
    @endif
    <br>
    <input type="file" name="image" value="" class="file-input file-input-bordered file-input-info w-full max-w-xs" />
    <br>
    <div class="flex justify-center">
        <a class="btn btn-xs bg-gray-400 sm:btn-sm md:btn-md lg:btn-lg rounded-lg text-black border-inherit hover:text-white mx-4 hover:bg-gray-600" href="{{url('menu/')}}">Volver</a>
        <input type="submit" value="{{$mood}}" class="btn btn-xs sm:btn-sm md:btn-md bg-blue-500 lg:btn-lg rounded-lg text-black border-inherit hover:text-white hover:bg-blue-600"/>
        
    </div>
    
</div>
