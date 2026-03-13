@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Crear Prestamo</h1>

   <div class="bg-white shadow-md rounded-lg p-6 mt-4">
       <form action="{{route('prestamos.buscar_usuario')}}" method="POST">
            @csrf
            <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID Usuario:</label>
            <input type="text" name="usuario_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre Usuario:</label>
            <input type="text" name="usuario_nombre" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

            <div class="flex items-center justify-between mt-4">
                <input type="submit" value="Buscar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded ">
                <a href="{{ route('prestamos.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form>

        @isset($usuario)
        <div class="mt-6">
            <h2 class="text-x1 font-bold mb-4">Usuario Encontrado:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>
        @endisset
    </div>
</div>
@endsection