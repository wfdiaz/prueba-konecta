<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {

        return view('ventas.index_ventas');

    }

    public function show($id)
    {

        return view('ventas.ventas_edit', compact('id'));

    }
}
