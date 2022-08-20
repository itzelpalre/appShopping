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

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Buscar por Categoria -->
    

    <!-- Buscar por Descripcion -->
    @foreach ($categorias as $row)
    <tr>
      <td>{{ $row->nombre }}</td>
      <td>{{ $row->descripcion }}</td>
      <td>
        <form style="float: left; margin: 0 5px;" action="{{ route('eliminarCategoria.destroy', $row->id) }}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger">Eliminar</button>
        </form>
      
        <a href="{{ route('editarCategoria.edit', $row->id) }}">  
          <button type="button" class="btn btn-warning">Editar</button>
        </a>

      </td>
    </tr>

    @endforeach
  </tbody>

</table>
</div>
@endsection