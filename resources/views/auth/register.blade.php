@extends('layouts.mainform',['title' =>'register'])
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
<main class="form-register">
        <form method="post">
            @csrf
         <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
                <label for="username">username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
        <button class="w-100 btn-login mt-3" type="submit">Sign in</button>

        <small>Sudah punya akun?<a href="/login">Silahkan login!</a></small>
        </form>
</main>
</div>
</div>


@endsection
