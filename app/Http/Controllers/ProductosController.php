<?php

namespace App\Http\Controllers;
use App\Models\productos;

use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        // $producto = productos::all();

        // return view('dashboard');

        return view('productos.index_productos');

        // return view('administration::index', compact('producto'));
    }

    public function show($id)
    {

        return view('productos.admon_product_edit', compact('id'));

    }

}
