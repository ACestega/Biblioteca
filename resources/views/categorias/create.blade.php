@extends('layout.admin')

@section('content')

    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Agregar Nueva Categoría</h1>
        
        <div class="bg-white shadow rounded-lg p-6">

            <form action="{{ route('categorias.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre de la Categoría</label>
                    <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar </button>
                <a href="{{ route('categorias.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
@endsection