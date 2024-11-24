@extends('dashboard.partials.main')
@section('container')

<div class="row">
  <div class="col-8">
    <h2>Tambah Tingkat Stres</h2>

    <form action="/storetingkatstres" method="post">
      @csrf
      <div class="mb-3">
        <label for="nama_tingkatstres" class="form-label">Nama Gejala</label>
        <input name="nama_tingkatstres" type="text" class="form-control @error('nama_tingkatstres') is-invalid @enderror" value="{{ old('nama_tingkatstres') }}" id="nama_tingkatstres" placeholder="example : stres ringan">
        @error('nama_tingkatstres')
          <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
          <label for="kode_tingkatstres" class="form-label">Kode Gejala</label>
          <input name="kode_tingkatstres" type="text" class="form-control @error('kode_tingkatstres') is-invalid @enderror" value="{{ old('kode_tingkatstres') }}" id="kode_tingkatstres" placeholder="example : P01">
          @error('kode_tingkatstres')
          <p class="invalid-feedback">{{ $message }}</p>
          @enderror
      </div>

      <div class="mb-3">
        <label for="solusi_stres" class="form-label">Deskripsi Gejala</label>
        <input name="solusi_stres" class="form-control @error('solusi_stres') is-invalid @enderror" value="{{ old('solusi_stres') }}" id="solusi_stres" placeholder="example : perbanyak olahraga">
        @error('solusi_stres')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="btn btn-success">Save <i class="bi bi-check-lg"></i></button>
    </form>

    <a href="/dashboard/tingkatstrespage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

  </div>
</div>


@endsection