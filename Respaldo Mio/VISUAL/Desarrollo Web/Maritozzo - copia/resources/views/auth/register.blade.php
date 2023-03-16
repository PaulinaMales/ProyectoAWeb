@extends('layouts.app')

@section('subtitle', 'Registro')

@section('content')
<div class="flex h-screen justify-center items-center font-mono">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div class="flex-row justify-content-center align-items-center bg-green-500 bg-opacity-40 hidden lg:block p-2 rounded-l-lg">

                <img src="{{asset('/storage/Maritozzo.svg')}}" alt="Maritozzo" class="pt-12 my-14 md:my-12" />
            </div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none bg-gray-700 bg-opacity-50">
                <form class="px-8 pt-6 pb-8 mb-4 rounded" method="POST" action="/register">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-100">
                            Nombre de Usuario
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="text"
                            placeholder="Ex. Carlos"
                            name="username"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-100">
                            Correo Electrónico
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="email"
                            placeholder="Ex. carlos@carlos.com"
                            name="email"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-100">
                            Contraseña
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="password"
                            placeholder="******************"
                            name="password"
                            required
                        />
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-100">
                            Confirmar Contraseña
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="password"
                            placeholder="******************"
                            name="password_confirmation"
                            required
                        />
                    </div>
                    
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Continuar
                        </button>
                    </div>
                    <hr class="mb-6 border-t"/>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-green-200 align-baseline hover:text-green-100"
                            href="{{route('login')}}"
                        >
                            Ya tienes una cuenta? Ingresa!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

