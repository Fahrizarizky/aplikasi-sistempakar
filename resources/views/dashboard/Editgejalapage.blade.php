@extends('dashboard.partials.main')
@section('container')

<div class="row">
    <div class="col-8">
      <h2>Edit Gejala</h2>

      <form action="/updategejala/{{ $gejala->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_gejala" class="form-label">Nama Gejala</label>
            <input name="nama_gejala" type="text" class="form-control" id="nama_gejala" value="{{ $gejala->nama_gejala }}">
        </div>
        <div class="mb-3">
            <label for="kode_gejala" class="form-label">Kode Gejala</label>
            <input name="kode_gejala" type="text" class="form-control" id="kode_gejala" value="{{ $gejala->kode_gejala }}">
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi Gejala</label>
          <input name="deskripsi" type="text" class="form-control" id="deskripsi" value="{{ $gejala->deskripsi }}">
        </div>
        
        <button type="submit" class="btn btn-info">Update <i class="bi bi-pencil-fill"></i></button>
      </form>

      <a href="/dashboard/gejalapage" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
        
    </div>
</div>


@endsection