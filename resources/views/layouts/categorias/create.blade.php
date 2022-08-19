@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dar de alta Categoria</h2>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection