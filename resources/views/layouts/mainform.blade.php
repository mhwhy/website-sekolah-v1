<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBKU | {{ $title }}</title>

    @include('partials.styleform')

  </head>
  <body style="background: #557153">

<div class="container">
    @yield('container')
</div>


@include('partials.javascript')


  </body>
</html>
