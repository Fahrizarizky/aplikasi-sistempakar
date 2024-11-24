@extends('partials.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

                    <div class="card p-4 mt-5 mb-5" style="box-shadow: 1px 1px 12px 4px">
                        <div class="card-body">
                            <form action="/registerstore" method="post">
                                @csrf
                                <h3 class="text-center">Register</h3>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}">
                                    @error('nama')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="nama_sekolah" class="form-label">Sekolah</label>
                                    <input name="nama_sekolah" type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" id="nama_sekolah" value="{{ old('nama_sekolah') }}">
                                    @error('nama_sekolah')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input name="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" value="{{ old('kelas') }}">
                                    @error('kelas')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" value="{{ old('jurusan') }}">
                                    @error('jurusan')
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
                            <button type="submit" class="btn btn-dark">Register</button>
                        </form>
                    </div>

                </div>
            </div>
          </div>

@endsection

   