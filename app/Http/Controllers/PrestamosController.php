<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    public function index()
    {
        return view('prestamos.index');
    }

    public function create()
    {
        return view('prestamos.create');
    }

    public function buscar_usuario(Request $request)
    {
       $usuario_id = $request->input('usuario_id');
       $usuario_nombre = $request->input('usuario_nombre');

      if(!empty($usuario_id))
        {
            $usuario = User::findOrFail($usuario_id);

            return view('prestamos.create', compact('usuario'));
        }

        if(!empty($usuario_nombre))
        {
            $usuario = User::where('name', 'like', '%' . $usuario_nombre . '%')->first();

                return view('prestamos.create', compact('usuario'));

        }

    }
}
