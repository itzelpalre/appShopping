@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4">
      <a href="{{ url('/productosCrear') }}"><button class="btn btn-primary">Agregar Contenido</button></a>
      <a href="{{ route('descargarPDF') }}" class="btn btn-sm btn-success">Imprimir PDF</a>
    </div>
    <div class="col-4">
      {{ Form::open(array('url' => 'buscarProducto', 'method' => 'GET', 'class' => 'form-inline mt-2 mt-md-0', 'role' => 'search')) }}
          <div class="form-group" style="display: inline-block;">
            {!! Form::text('producto', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar Producto']) !!}
          </div>
          <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
      {{ Form::close() }}
      <br>
    </div>
  </div>
</div>
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Imagen Principal</th>
      <th scope="col">Contenido Multimedia</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $row)

    <tr>
      <td>{{ $row->nombre }}</td>
      <td>{{ $row->descripcion }}</td>
      <td>{{ $row->observaciones }}</td>
      <td><img src="{{ $row->imagenurl }}" width="300"></td>
      <td><a href="{{ $row->contenido }}"><button class="btn-success">Descargar Ficha Tecnica</button></a></td>
      <td>
        <form style="float: left; margin: 0 5px;" action="{{ route('eliminarCont.destroy', $row->id) }}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger">Eliminar</button>
        </form>
      
        <a href="{{ route('editarCont.edit', $row->id) }}">  
          <button type="button" class="btn btn-warning">Editar</button>
        </a>

      </td>
    </tr>

    @endforeach
  </tbody>

</table>
</div>
@endsection