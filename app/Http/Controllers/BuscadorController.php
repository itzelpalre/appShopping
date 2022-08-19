<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class BuscadorController extends Controller
{
    public function index(Request $request)
  {

    $categoria = $request->get('categoria');
    

    $categorias = Categoria::orderBy('id', 'ASC')
                ->name($categoria)
                ->paginate(4);

    return view('layouts/categorias/index', compact('categorias'));

  }
}
