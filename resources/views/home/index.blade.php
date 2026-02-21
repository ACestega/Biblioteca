@extends('layout.admin')

@section('content')
<!-- Contenido principal -->
            <main class="flex-1 p-5 md:p-8">
                <div id="content">
                    <!-- Sección de bienvenida -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Bienvenido al Panel de Administración</h2>
                        <p class="text-gray-600">Gestiona los recursos de la biblioteca desde esta interfaz.</p>
                    </section>
                    
                    <!-- Tarjetas de resumen -->
                    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Libros totales</p>
                                    <p class="text-2xl font-bold">2,548</p>
                                </div>
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-book text-blue-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-up mr-1"></i> 5.2%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Préstamos activos</p>
                                    <p class="text-2xl font-bold">187</p>
                                </div>
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exchange-alt text-green-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-red-600 text-sm font-medium"><i class="fas fa-arrow-down mr-1"></i> 2.3%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Usuarios registrados</p>
                                    <p class="text-2xl font-bold">523</p>
                                </div>
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-users text-purple-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-up mr-1"></i> 8.7%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Libros vencidos</p>
                                    <p class="text-2xl font-bold">14</p>
                                </div>
                                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-down mr-1"></i> 12.5%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                    </section>

                    @foreach($libros as $libro)

                   <section class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Lista de Libros</h3>
                        
                        <div class="flex items-center gap-4">
                            <a href="{{ route('libros.create') }}" 
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Nuevo Libro
                            </a>
                            <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Ver todos</button>
                        </div>
                    </div>
                    </section>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Titulo</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">ISBN</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Autor</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">editorial</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Categoría</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t hover:bg-gray-50">
                                        <td class="py-3 px-4">{{ $libro->nombre }}</td>
                                        <td class="py-3 px-4">{{ $libro->isbn }}</td>
                                        <td class="py-3 px-4">{{ $libro->autor }}</td>
                                        <td class="py-3 px-4">{{ $libro->editorial }}</td>
                                        <td class="py-3 px-4">{{ $libro->categoria->nombre }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </section>
                </div>
            </main>
        </div>
        @endsection