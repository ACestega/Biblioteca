@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Seleccionar Libro</h1>


    <div class="bg-white shadow-md rounded-lg p-6">
    <div class="mt-6">
            <h2 class="text-x1 font-bold mb-4">Usuario:</h2>
            <p><strong>ID:</strong> {{ $usuario->id }}</p>
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
        </div>

        <form action="{{ route('prestamos.store') }}" method="POST">
            @csrf
            <laber for="libro_id" class="block text-gray-700 font-bold mb-2">Libro:</laber>
            <select name="libro_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                <option value="">Seleccione un Libro</option>
            @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                @endforeach
            </select>
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="flex item-center justify-between mt-4">
                <input type="submit" value="Prestar" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">
                <a href="{{ route('prestamos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection