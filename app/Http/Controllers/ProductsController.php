<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('layouts/products/index', compact('products'));

    }
    
    public function create() {

        return view('layouts/products/create');

    }

    public function store(Request $request) {

        $product = new Product([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'observaciones' => $request->get('observaciones'),
        ]);

        if($request->hasFile('imagenurl')){
            $file = $request->file('imagenurl');
            $path = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenurl')->move($path, $filename);

            $product->imagenurl = $path . $filename;
        }

        if($request->hasFile('contenido')){
            $file2 = $request->file('contenido');
            $path2 = 'images/featureds/';
            $filename2 = time() . '-' . $file2->getClientOriginalName();
            $uploadSuccess2 = $request->file('contenido')->move($path2, $filename2);

            $product->contenido = $path2 . $filename2;
        }

        $product->save();

        return redirect()->route('productos.index');
        

    }

    public function edit($id) {

        $product = Product::find($id);

        return view('layouts/products/edit', compact('product'));

    }

    public function update(Request $request, $id) {

        $product = Product::find($id);

        $product->update($request->all());

        return redirect()->route('productos.index');

    }

    public function destroy($id) {

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('productos.index');

    }
}