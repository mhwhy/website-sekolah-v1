<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>WEBKU | {{ $title }}</title> --}}

    @include('partials.style')

  </head>
  <body style="background: #EEF2E6">
    @include('partials.navbar')

    <div class="container2">
      @yield('container2')
  </div>

@include('partials.footer')

@include('partials.javascript')


  </body>
</html>
