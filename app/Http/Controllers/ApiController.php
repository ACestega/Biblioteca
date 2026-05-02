<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;
use App\Http\Resources\LibroResource;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        #validar los datos de incio de sesión
        $credentials = request()->validate([
            'email' => 'required | string | email',
            'password' => 'required | string'
        ]);
        
         # Intentar iniciar sesión
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('api-token')->plainTextToken;
           
            return ['token'=>$token];
        }

        return ['error' => 'Datos Incorrectos'];
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ['data' => 'Sesión cerrada'];
    }

    public function libros_disponibles()
    {
        $libros = Libro::where('estatus',0)->orderBy('id','asc')->get();

        $libros_resource = LibroResource::collection($libros);
        
        return $libros_resource;
    }


}
