<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  </head>
  <body>
    @include('layouts.header')
    @yield('contain')
    @include('layouts.footer')
  </body>
</html>
