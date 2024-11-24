@extends('dashboard.partials.main')
@section('container')

<div class="row">
  <div class="col-8">
    <h2>Tambah Aturan</h2>

    <form action="/storeaturan" method="post">
      @csrf
      <div class="mb-3">
        <label for="gejala_id" class="form-label">Id Gejala</label>
        <input name="gejala_id" type="number" class="form-control @error('gejala_id') is-invalid @enderror" value="{{ old('gejala_id') }}" id="gejala_id" placeholder="example : 1 (sesuaikan dengan jumlah id gejala)">
        @error('gejala_id')
          <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
          <label for="tingkatstres_id" class="form-label">Id Tingkat Stres</label>
          <input name="tingkatstres_id" type="number" class="form-control @error('tingkatstres_id') is-invalid @enderror" value="{{ old('tingkatstres_id') }}" id="tingkatstres_id" placeholder="example : 2 (sesuaikan dengan jumlah id tingkat stres)">
          @error('tingkatstres_id')
          <p class="invalid-feedback">{{ $message }}</p>
          @enderror
      </div>

      <div class="mb-3">
        <label for="bobot" class="form-label">Bobot</label>
        <input name="bobot" class="form-control @error('bobot') is-invalid @enderror" value="{{ old('bobot') }}" id="bobot" placeholder="example : 0.50 (hanya boleh angka 0.00 - 1.00)">
        @error('bobot')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="btn btn-success">Save <i class="bi bi-check-lg"></i></button>
    </form>

    <a href="/dashboard/aturanpage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

  </div>
</div>


@endsection