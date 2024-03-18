<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  @include('components.header')
  @yield('content')
</body>
<title>@yield('title', 'Custom auth laravel')</title>
@vite('resources/css/app.css')
</html>