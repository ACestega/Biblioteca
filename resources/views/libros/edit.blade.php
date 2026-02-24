@extends('layout.admin')

@section('content')

<div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Libro</h1>
        
        <div class="bg-white shadow rounded-lg p-6">

            <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Libro</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                
                    <div class="mb-4">
                    <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
                    <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

                    <div class="mb-4">
                    <label for="autor" class="block text-gray-700 font-medium mb-2">Autor</label>
                    <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    <div class="mb-4">
                    <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial</label>
                    <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>

                    <div class="mb-4">
                    <label for="categoria" class="block text-gray-700 font-medium mb-2">Categoría</label>
                    <select name="categoria" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                        <option value=""></option>

                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $libro->categoria->id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
 
                </div>
                <div class="flex items-center justify-between">
                <button  href= "{{ route('libros.update', $libro->id) }}" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar </button>

                
                
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
            </div>
            </form>
        </div>
    </div>

@endsection