@extends('dashboard.partials.main')
@section('container')

<div class="row">
    <div class="col-8">
      <h2>Edit Aturan</h2>

      <form action="/updateaturan/{{ $aturan->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="gejala_id" class="form-label">Id Gejala</label>
            <input name="gejala_id" type="number" class="form-control @error('gejala_id') is-invalid @enderror" id="gejala_id" value="{{ $aturan->gejala_id }}">
            @error('gejala_id')
            <p class="invalid-feedback">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
            <label for="tingkatstres_id" class="form-label">Id Tingkat Stres</label>
            <input name="tingkatstres_id" type="number" class="form-control @error('tingkatstres_id') is-invalid @enderror" id="tingkatstres_id" value="{{ $aturan->tingkatstres_id }}">
            @error('tingkatstres_id')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
          <label for="bobot" class="form-label">Bobot</label>
          <input name="bobot" class="form-control @error('bobot') is-invalid @enderror" id="bobot" value="{{ $aturan->bobot }}">
          @error('bobot')
          <p class="invalid-feedback">{{ $message }}</p>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-info">Update <i class="bi bi-pencil-fill"></i></button>
      </form>

      <a href="/dashboard/aturanpage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
        
    </div>
</div>


@endsection