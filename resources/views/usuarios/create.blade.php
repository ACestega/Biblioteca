@extends('layout.admin')

@section('content')

 <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Agregar Nuevo Usario</h1>
        
        <div class="bg-white shadow rounded-lg p-6">

            <form action="{{ route('usuarios.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Usuario</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('nombre')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Correo electronico</label>
                    <input type="email" name="email" id="email" value ="{{ old('email') }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="user_type" class="block text-gray-700 font-medium mb-2">Tipo de usuario</label>
                    <select name="user_type" id="user_type" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                        <option value="">Seleccione un tipo de usuario</option>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                    @error('user_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">Guardar </button>
                <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
@endsection