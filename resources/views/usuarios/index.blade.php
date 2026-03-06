@extends('layout.admin')

@section('content')

<div class="container mx-auto px-4 py-8">
<h1 class="text-2xl font-bold mb-6">Lista de usuarios</h1>

    <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded mb-4 inline-block">Crear usuario</a>

   <div class="bg-white shadow rounded-lg p-6">
        <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Nombre</th>
                <th class="px-4 py-2 border-b">Email</th>
                <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td class="px-4 py-2 border-b text-center">{{ $usuario->id }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $usuario->nombre }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $usuario->email }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $usuario->user_type }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold px-2 py-1 rounded">Editar</a>
                        <form action="" method="POST" class="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 py-1 rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection