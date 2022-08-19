<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index() {

        $categorias = Categoria::all();

        return view('layouts/categorias/index', compact('categorias'));

    }

    public function create() {

        return view('layouts/categorias/create');

    }

    public function store(Request $request) {

        $categoria = new Categoria([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
        ]);
        $categoria->save();

        return redirect()->route('categorias.index');
        

    }

    public function edit($id) {

        $categoria = Categoria::find($id);

        return view('layouts/categorias/edit', compact('categoria'));

    }

    public function update(Request $request, $id) {

        $categoria = Categoria::find($id);

        $categoria->update($request->all());

        return redirect()->route('categorias.index');

    }

    public function destroy($id) {

        $categoria = Categoria::find($id);

        $categoria->delete();

        return redirect()->route('categorias.index');

    }
}
