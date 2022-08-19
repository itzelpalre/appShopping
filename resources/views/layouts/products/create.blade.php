@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dar de alta Contenido</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>

        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <input type="text" class="form-control" name="observaciones">
        </div>

        <div class="mb-3">
            <label for="imagenurl" class="form-label">Imagen Principal</label>
            <input type="file" class="form-control" name="imagenurl">
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Ficha Tecnica</label>
            <input type="file" class="form-control" name="contenido">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection