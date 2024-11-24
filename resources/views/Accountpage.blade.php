@extends('partials.main')
@section('container')

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-6">
            
            <div class="card" style="width: auto;box-shadow: 1px 1px 12px 4px">
                <div class="card-body">
                    <h2>My Account</h2>
                    @if (session()->has('sukses'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('sukses') }}
                      </div>
                    @endif
                        <form action="/updateaccount/{{ $account->id }}" method="post">
                          @csrf
                          <div class="mb-3">
                              <label for="nama" class="form-label">Nama</label>
                              <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $account->nama }}">
                              @error('nama')
                                  <p class="invalid-feedback">{{ $message }}</p>
                              @enderror
                          </div>

                          <div class="mb-3">
                              <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                              <input name="nama_sekolah" type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" id="nama_sekolah" value="{{ $account->nama_sekolah }}">
                              @error('nama_sekolah')
                                  <p class="invalid-feedback">{{ $message }}</p>
                              @enderror
                          </div>

                          <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input name="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" value="{{ $account->kelas }}">
                            @error('kelas')
                                  <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" value="{{ $account->jurusan }}">
                            @error('jurusan')
                                  <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $account->email }}">
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
                          
                          <button type="submit" class="btn btn-success">Update <i class="bi bi-pencil-fill"></i></button>
                        </form>
                  </div>
              </div>
            
                  <a href="/" class="btn btn-dark mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
                    
                </div>
            </div>

        </div>
    </div>
</div>



@endsection