<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
