@extends('layouts.app')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">
    <h2>Editar Categoria</h2>
    <form action="{{ route('editarCategoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $categoria->nombre }}">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{ $categoria->descripcion }}">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection