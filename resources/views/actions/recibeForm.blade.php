@extends('layouts.master')

@section('content')
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Carrera</th>
        <th>Token</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $request['nombre'] }}</td>
        <td>{{ $request['carrera'] }}</td>
        <td>{{ $request['_token'] }}</td>
      </tr>
    </tbody>
  </table>
@endsection
