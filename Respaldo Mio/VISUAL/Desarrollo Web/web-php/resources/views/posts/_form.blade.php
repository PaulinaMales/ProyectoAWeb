@csrf

<div class="mb-6">
  <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Titulo</label>
  <span style="color:red">@error('title') {{$message}} @enderror</span>
  <!-- El OLD se utiliza para no perder la informacion de todos los campos por un error -->
  <input type="text" name="title" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Your Name"
   value="{{old('title',$post->title)}}">

   <br>
   <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">URL</label>
   <span style="color:red">@error('slug') {{$message}} @enderror</span>
   <input type="text" name="slug" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" placeholder="Url"
   value="{{old('slug',$post->slug)}}">

   <br>
   <label class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Contenido</label>
   <span style="color:red">@error('body') {{$message}} @enderror</span>
   <textarea style="border-color: grey;" type="text" name="body" class="rounded border-gray-200 w-full mb-4" 
   rows="5">{{old('body',$post->body)}}</textarea>

</div>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>

