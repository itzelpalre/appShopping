@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Contenido {{ $product->id }}</h2>
    <form action="{{ route('editarCont.update', $product->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $product->nombre }}">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{ $product->descripcion }}">
        </div>

        <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <input type="text" class="form-control" name="observaciones" value="{{ $product->observaciones }}">
        </div>

        <div class="mb-3">
            <label for="imagenurl" class="form-label">Categoria</label>
            <select name="categorias">
                @foreach($categorias as $row)
                <option value="{{$row->nombre}}">{{$row->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="imagenurl" class="form-label">Imagen Principal</label>
            <input type="text" class="form-control" name="imagenurl" value="{{ $product->imagenurl }}">
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido Multimedia</label>
            <input type="text" class="form-control" name="contenido" value="{{ $product->contenido }}">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection