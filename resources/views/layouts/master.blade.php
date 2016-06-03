<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Udemy - Curso Laravel 5.2</title>
  <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
  @yield('styles')
</head>
<body>

  @include('includes.header')

  <div class="container-fluid">
    @yield('content')
  </div>

  @include('includes.footer')

</body>
</html>
