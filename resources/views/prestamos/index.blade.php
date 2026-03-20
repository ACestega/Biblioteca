@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

    @if(session('error'))
        <div class="bg-red-500 text-white px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mb-4 inline-block">Crear Prestamo</a>

   <div class="bg-white shadow rounded-lg p-6">
       <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-4 font-semibold text-gray-700">ID</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Libro</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Usuario</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Fecha Prestamo</th>
                            <th class="py-3 px-4 font-semibold text-gray-700">Acciones</th>
                        </tr>
                </thead>
                    <tbody>
                        @foreach($prestamos as $prestamo)
                            <tr>
                                <td class="px-4 py-2 border-b text-center">{{ $prestamo->id }}</td>
                                <td class="px-4 py-2 border-b text-center">{{ $prestamo->libro->nombre }}</td>
                                <td class="px-4 py-2 border-b text-center">{{ $prestamo->usuario->name }}</td>
                                <td class="px-4 py-2 border-b text-center">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                                <td class="px-4 py-2 border-b">
                                    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mr-2">Ver</a>
                                    <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded mr-2">Entregar</a>
                                    <form action="#" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 py-2 rounded">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection