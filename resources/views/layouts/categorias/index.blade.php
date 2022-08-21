@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-2">
      <a href="{{ url('/categoriasCrear') }}"><button class="btn btn-primary">Agregar Categoria</button></a>
    </div>
    <div class="col-4">
    {{ Form::open(array('url' => 'buscarCategoria', 'method' => 'GET', 'class' => 'form-inline mt-2 mt-md-0', 'role' => 'search')) }}
        <div class="form-group" style="display: inline-block;">
          {!! Form::text('categoria', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar Categoria']) !!}
        </div>
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
    {{ Form::close() }}
    </div>
  </div>
</div>

<br>

<!-- Cards Categorias-->
<div class="container">
<div class="row">
@foreach ($categorias as $row)
<div class="card" style="width: 18rem; margin:15px;">
  <div class="card-body">
    <h5 class="card-title"><b>Categoria</b> | {{ $row->nombre }}</h5>
    <p class="card-text">{{ $row->descripcion }}</p>
    <a href="{{ route('editarCategoria.edit', $row->id) }}">  
      <button type="button" class="btn btn-warning">Editar</button>
    </a>
    <form style="float: left; margin: 0 5px;" action="{{ route('eliminarCategoria.destroy', $row->id) }}" method="POST">
      @csrf
      @method('delete')
      <button class="btn btn-danger">Eliminar</button>
    </form>
  </div>
</div>
@endforeach
</div>
</div>
@endsection