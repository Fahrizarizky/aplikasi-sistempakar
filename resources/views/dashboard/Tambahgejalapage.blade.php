@extends('dashboard.partials.main')
@section('container')

<div class="row">
  <div class="col-8">
    <h2>Tambah Gejala</h2>

    <form action="/storegejala" method="post">
      @csrf
      <div class="mb-3">
        <label for="nama_gejala" class="form-label">Nama Gejala</label>
        <input name="nama_gejala" type="text" class="form-control @error('nama_gejala') is-invalid @enderror" value="{{ old('nama_gejala') }}" id="nama_gejala" placeholder="example : pusing">
        @error('nama_gejala')
          <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
          <label for="kode_gejala" class="form-label">Kode Gejala</label>
          <input name="kode_gejala" type="text" class="form-control @error('kode_gejala') is-invalid @enderror" value="{{ old('kode_gejala') }}" id="kode_gejala" placeholder="example : G01">
          @error('kode_gejala')
          <p class="invalid-feedback">{{ $message }}</p>
          @enderror
      </div>

      <div class="mb-3">
        <label for="deskripsi_gejala" class="form-label">Deskripsi Gejala</label>
        <input name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" id="deskripsi" placeholder="example : Pusing adalah sensasi seperti melayang/berputar  pada bagian kepala">
        @error('deskripsi')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="btn btn-success">Save <i class="bi bi-check-lg"></i></button>
    </form>

    <a href="/dashboard/gejalapage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

  </div>
</div>


@endsection