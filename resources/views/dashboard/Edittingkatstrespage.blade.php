@extends('dashboard.partials.main')
@section('container')

<div class="row">
    <div class="col-8">
      <h2>Edit Tingkat Stres</h2>

      <form action="/updatetingkatstres/{{ $tingkat->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_tingkatstres" class="form-label">Nama Tingkat Stres</label>
            <input name="nama_tingkatstres" type="text" class="form-control" id="nama_tingkatstres" value="{{ $tingkat->nama_tingkatstres }}">
        </div>
        <div class="mb-3">
            <label for="kode_tingkatstres" class="form-label">Kode Tingkat Stres</label>
            <input name="kode_tingkatstres" type="text" class="form-control" id="kode_tingkatstres" value="{{ $tingkat->kode_tingkatstres }}">
        </div>
        <div class="mb-3">
          <label for="solusi_stres" class="form-label">Solusi</label>
          <input name="solusi_stres" type="text" class="form-control" id="solusi_stres" value="{{ $tingkat->solusi_stres }}">
        </div>
        
        <button type="submit" class="btn btn-info">Update <i class="bi bi-pencil-fill"></i></button>
      </form>

      <a href="/dashboard/tingkatstrespage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
        
    </div>
</div>


@endsection