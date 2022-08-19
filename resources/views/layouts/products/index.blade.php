@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ url('/productosCrear') }}"><button class="btn btn-primary">Agregar Contenido</button></a>
  <a href="{{ route('descargarPDF') }}" class="btn btn-sm btn-success">Imprimir PDF</a>
</div>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container">
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">#</th>
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
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->nombre }}</td>
      <td>{{ $row->descripcion }}</td>
      <td>{{ $row->observaciones }}</td>
      <td><img src="{{ $row->imagenurl }}"></td>
      <td>{{ $row->contenido }}</td>
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