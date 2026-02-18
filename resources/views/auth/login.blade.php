@extends('layout.auth')

@section('content') 
 <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <a href="#" class="inline-flex items-center gap-2 text-indigo-700 hover:text-indigo-900">
                <i class="fas fa-arrow-left"></i> Volver a la biblioteca
            </a>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mt-4">Accede o crea tu cuenta</h1>
            <p class="text-gray-600 mt-2">Formularios con estilos compartidos para login y registro</p>
        </div>

        <!-- Contenedor flexible: dos columnas en desktop, una en móvil -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            
            <!-- ========== FORMULARIO DE LOGIN ========== -->
            <form id="loginForm" action="{{ route('login')}}" method="POST">
                @csrf
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-3 mb-6">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-sign-in-alt text-xl text-indigo-700"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Iniciar sesión</h2>
                </div>
                
                <form class="space-y-6">
                    <!-- Campo Email (estilos compartibles) -->
                    <div class="form-group">
                        <label for="email-login" class="block text-sm font-semibold text-gray-700 mb-1">
                            <i class="fas fa-envelope mr-1 text-indigo-600"></i> Email
                        </label>
                        <input type="email" id="email-login" name="email" 
                               placeholder="tucorreo@ejemplo.com"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                               required>
                    </div>

                    <!-- Campo Password (estilos compartibles) -->
                    <div class="form-group">
                        <label for="password-login" class="block text-sm font-semibold text-gray-700 mb-1">
                            <i class="fas fa-lock mr-1 text-indigo-600"></i> Contraseña
                        </label>
                        <input type="password" id="password-login" name="password" 
                               placeholder="••••••••"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                               required>
                    </div>

                    <!-- Recordar y olvidé contraseña -->
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <label for="remember" class="ml-2 text-sm text-gray-600">Recordarme</label>
                        </div>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 hover:underline">¿Olvidaste tu contraseña?</a>
                    </div>

                    <!-- Botón Login -->
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                        <i class="fas fa-sign-in-alt"></i>
                        Acceder
                    </button>
                </form>
                
                <div class="mt-6 text-center text-sm text-gray-600">
                    ¿No tienes cuenta? 
                    <a href="#registro" class="text-indigo-600 font-semibold hover:underline">
                        Regístrate gratis
                    </a>
                </div>
            </div>

            <!-- ========== FORMULARIO DE REGISTRO ========== -->
            <form id="registerForm" action="{{ route('register')}}" method="POST">
                 <div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-gray-200">
               @csrf
            <div class="flex items-center gap-3 mb-6">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-user-plus text-xl text-indigo-700"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Crear cuenta</h2>
                </div>

                <form class="space-y-6">
                    <!-- Fila Nombre y Apellido (responsive: columna en móvil, fila en md+) --> 
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Campo Nombre -->
                        <div class="form-group">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">
                                <i class="fas fa-user mr-1 text-indigo-600"></i> Nombre
                            </label>
                            <input type="text" id="name" name="name" 
                                   placeholder="María"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                                   required>
                        </div>
                        
                    <!-- Campo Email (registro) -->
                    <div class="form-group">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">
                            <i class="fas fa-envelope mr-1 text-indigo-600"></i> Email
                        </label>
                        <input type="email" id="email" name="email" 
                               placeholder="tucorreo@ejemplo.com"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                               required>
                    </div>

                    <!-- Campo Password -->
                    <div class="form-group">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">
                            <i class="fas fa-lock mr-1 text-indigo-600"></i> Contraseña
                        </label>
                        <input type="password" id="password" name="password" 
                               placeholder="Mínimo 8 caracteres"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                               required>
                        <p class="text-xs text-gray-500 mt-1">Al menos 8 caracteres, mayúscula y número</p>
                    </div>

                    <!-- Campo Repetir Password -->
                    <div class="form-group">
                        <label for="password-confirm" class="block text-sm font-semibold text-gray-700 mb-1">
                            <i class="fas fa-lock mr-1 text-indigo-600"></i> Repetir contraseña
                        </label>
                        <input type="password" id="password-confirm" name="password_confirmation" 
                               placeholder="••••••••"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition bg-gray-50 focus:bg-white text-gray-800 placeholder-gray-400"
                               required>
                    </div>

                    <!-- Aceptar términos -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox" id="terms" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" required>
                        </div>
                        <label for="terms" class="ml-2 text-sm text-gray-600">
                            Acepto los <a href="#" class="text-indigo-600 hover:underline">términos y condiciones</a> y la <a href="#" class="text-indigo-600 hover:underline">política de privacidad</a>
                        </label>
                    </div>

                    <!-- Botón Registro -->
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                        <i class="#"></i>
                        Crear cuenta
                    </button>
                </form>

                <div class="mt-6 pt-4 border-t border-gray-200 text-center text-sm text-gray-600">
                    ¿Ya tienes cuenta? 
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">
                        Inicia sesión
                    </a>
                </div>
            </div>
        </div>