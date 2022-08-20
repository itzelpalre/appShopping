<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BuscadorProductsController extends Controller
{
    public function index(Request $request)
  {
    $producto = $request->get('producto');

    $products = Product::orderBy('id', 'ASC')
                ->name($producto)
                ->paginate(4);

    return view('layouts/products/index', compact('products'));
  }
}
