<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all(); // Obtener todas las categorías para el dropdown
        return view('libros.create', compact('categorias')); // Pasar las categorías a la vista
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Crear un nuevo libro
        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        // Redirigir a la lista de libros o a donde desees
        return redirect()->route('home')->with('success', 'Libro creado exitosamente.');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id); // Obtener el libro por su ID
        $categorias = Categoria::all(); // Obtener todas las categorías para el dropdown
        return view('libros.edit', compact('libro', 'categorias')); // Pasar el libro y las categorías a la vista
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);
        
        // Actualizar el libro existente
        $libro = Libro::findOrFail($id);
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        // Redirigir a la lista de libros o a donde desees
        return redirect()->route('home')->with('success', 'Libro actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id); // Obtener el libro por su ID
        $libro->delete(); // Eliminar el libro

        // Redirigir a la lista de libros o a donde desees
        return redirect()->route('home')->with('success', 'Libro eliminado exitosamente.');
    }

    

}

