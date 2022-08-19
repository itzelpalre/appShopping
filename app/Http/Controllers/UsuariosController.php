<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    public function index() {

        $usuarios = User::all();

        return view('layouts/usuarios/index', compact('usuarios'));

    }

    public function store(Request $request) {

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->password),
        ]);
        $user->save();

        return redirect()->route('home');
        

    }
}
