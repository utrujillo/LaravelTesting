@extends('layouts.master')

@section('content')
  <p>I greet {{ $name === null ? 'you' : $name }}</p>
@endsection
