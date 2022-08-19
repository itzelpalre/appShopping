@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-8 bg-white ">
      <h2>Agregar Usuario</h2>
      <form action="{{ route('users.store') }}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="name" class="form-label">Usuario</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email">
        </div>
          <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
  </div>
</div>
@endsection
