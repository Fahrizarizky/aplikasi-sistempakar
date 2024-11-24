@extends('partials.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card p-4 mt-5 mb-5" style="box-shadow: 1px 1px 12px 4px">
                @if(session()->has('sukses'))
                <div class="alert alert-success text-center" role="alert">
                   {{ session('sukses') }}
                  </div>
                @endif
                @if(session()->has('gagal'))
                <div class="alert alert-danger text-center" role="alert">
                   {{ session('gagal') }}
                  </div>
                @endif
                <div class="card-body">
                    <form action="/loginstore" method="post">
                        @csrf
                        <h3 class="text-center">Login</h3>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
                            @error('password')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Login</button>
                </form>
                <a href="/register" class="text-center text-dark">Jika belum registrasi, mohon registrasi dahulu !</a>
            </div>

        </div>
    </div>
</div>

@endsection

   