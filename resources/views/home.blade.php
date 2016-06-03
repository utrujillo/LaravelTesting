@extends('layouts.master')

@section('content')
 <p>Bienvenidos!!</p>

 <a href="{{ route('greet') }}">Greet</a>
 <a href="{{ route('formPrueba') }}">Formulario</a>
 <a href="{{ route('niceaction', ['action' => 'greet']) }}">Greet Action - Controller</a>
 <a href="{{ route('recibeForm', ['action' => 'form']) }}">Form Action - Controller</a>
@endsection
