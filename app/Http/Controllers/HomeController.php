<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
         $user = auth()->user(); // Obtener el usuario autenticado

        if($user->user_type === 'admin') {
             $libros = Libro::paginate(2); // Obtener todos los libros de la base de datos con paginación
             $total_libros = Libro::count(); // Obtener el total de libros
             $libros_prestados = Libro::where('estatus', 1)->count(); // Obtener el total de libros prestados
             $total_usuarios = User::count(); // Obtener el total de usuarios
             $devoluciones_pendientes = Prestamo::where('estado', 'Pendiente')->count(); // Obtener el total de devoluciones pendientes


            return view('home.index', compact('libros', 'total_libros', 'libros_prestados', 'total_usuarios', 'devoluciones_pendientes')); // Pasar los libros y el total a la vista
         } else {
            return view('home.index_user');
            }
    //$libros = Libro::paginate(3); // Obtener todos los libros de la base de datos con paginación

    //return view('home.index', compact('libros')); // Pasar los libros a la vista
    }
}
