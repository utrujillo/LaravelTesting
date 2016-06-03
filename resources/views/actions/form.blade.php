@extends('layouts.master')

@section('content')
<form action="{{ route('recibeForm') }}" method="post" class="form-horizontal">

  <div class="form-group">
    <div class="col-lg-2">Nombre</div>
    <div class="col-lg-10">
      <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" class="form-control" />
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-2">Carrera</div>
    <div class="col-lg-10">
      <select name="carrera" id="carrera" class="form-control">
        <option value="0">- Seleccionar -</option>
        <option value="1">Ingenieria en Sistemas</option>
        <option value="2">Administración de Empresas</option>
      </select>
      <input type="hidden" value="{{ Session::token() }}" name="_token">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <input type="submit" value="Enviar" class="btn btn-primary">
    </div>
  </div>

</form>
@endsection
