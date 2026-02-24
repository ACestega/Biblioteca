<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class HomeController extends Controller
{
    public function index()
    {

        $libros = Libro::paginate(2); // Obtener todos los libros de la base de datos con paginación

        return view('home.index', compact('libros')); // Pasar los libros a la vista
    }
}
