@extends('layout.admin')

@section('content')

<div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Agregar Libro</h1>
        
        <div class="bg-white shadow rounded-lg p-6">

            <form action="{{ route('libros.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Libro</label>
                    <input type="text" name="nombre" id="nombre" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                
                    <div class="mb-4">
                    <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
                    <input type="text" name="isbn" id="isbn" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

                    <div class="mb-4">
                    <label for="autor" class="block text-gray-700 font-medium mb-2">Autor</label>
                    <input type="text" name="autor" id="autor" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

                    <div class="mb-4">
                    <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial</label>
                    <input type="text" name="editorial" id="editorial" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

                    <div class="mb-4">
                    <label for="categoria" class="block text-gray-700 font-medium mb-2">Categoría</label>
                    <select name="categoria" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                        <option value=""></option>

                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
 
                </div>
                <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar </button>
                
                
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
            </div>
            </form>
        </div>
    </div>

@endsection