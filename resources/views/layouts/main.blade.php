<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBKU | {{ $title }}</title>

    @include('partials.style')

  </head>
  <body style="background: #EEF2E6">

@include('partials.navbar')
<div class="container mt-4">
    @yield('container')
</div>

@include('partials.footer')

@include('partials.javascript')

<script src="https://kit.fontawesome.com/fb7b96bb2d.js" crossorigin="anonymous"></script>
  </body>
</html>