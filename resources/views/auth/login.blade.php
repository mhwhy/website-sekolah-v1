@extends('layouts.mainform',['title' =>'login'])
@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        @if(session()->has('LoginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('LoginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    <main class="form-signin">
      <form action="/login" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
          <label for="floatingInput">Email Addres</label>
          @error('email')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="floatingPassword">Password</label>

        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>

        <small>Not Registered!<a href="/register">Register Now!</a></small>
      </form>
    </main>
  </div>

  </body>
</html>

@endsection
