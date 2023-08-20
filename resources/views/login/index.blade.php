@extends('layouts.main')

@section('container')
<div class="row justify-content-center" style="margin-top: 100px">
    <div class="col-md-4">

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal" style="text-align: center">Admin Zaqueen</h1>
            <div class="form-floating mb-2" style="color : black">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating" style="color : black">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>

@endsection