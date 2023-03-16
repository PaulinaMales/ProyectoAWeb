
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>


   <!-- Agregar funcion CREAR -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }}-->
                    <a href="{{route('posts.create')}}" class="text-indigo-600">CREAR</a>
                </div>
            </div>
        </div>
    </div>


    <div class="py-10" style="padding-bottom: none;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
<table class="mb-4">
                        @foreach($posts as $post)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <!-- Agregar funcion EDITAR -->
                            <td class="px-6 py-4">
                                <a href="{{route('posts.edit', $post)}}" class="text-indigo-600">Editar</a>
                            </td>



                            <!-- Agregar funcion ELIMINAR -->
                            <td class="px-6 py-4">

                                <form action="{{route('posts.destroy',$post)}}" method="POST">
                                    <!-- Formulario seguro// token de seguridad --> 
                                    @csrf
                            	    @method('DELETE')
                                    <input
                                    type="submit"
                                    value="Eliminar" 
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                                    onclick="return confirm('Acepta eliminar el contenido de forma permanente?')"
                                    >
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

