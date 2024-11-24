@extends('dashboard.partials.main')
@section('container')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">

            <div class="card shadow">
                <div class="card-body">
                    <h6 class="text-subtitle text-muted d-inline">Nama : </h6>
                    <h6 class="text-subtitle">{{ $Info->nama_siswa }}</h6>
                    <h6 class="text-subtitle text-muted d-inline">Nama Sekolah : </h6>
                    <h6 class="text-subtitle">{{ $Info->nama_sekolah }}</h6>
                    <h6 class="text-subtitle text-muted d-inline">Kelas : </h6>
                    <h6 class="text-subtitle">{{ $Info->kelas }}</h6>
                    <h6 class="text-subtitle text-muted d-inline">Jurusan : </h6>
                    <h6 class="text-subtitle">{{ $Info->jurusan }}</h6>
                    <h6 class="card-subtitle text-muted d-inline">Tingkat stres yang anda alami : </h6>
                    <h6 class="text-subtitle">{{ $Info->tingkatstres_siswa }}</h6>
                    <h6 class="card-subtitle text-muted d-inline">persentase diagnosa : </h6>
                    <h6 class="card-subtitle mb-2">{{ $Info->persentase }}</h6>
                    <h6 class="card-subtitle text-muted d-inline">Solusi yang disarankan : </h6>
                    <h6 class="card-subtitle">{{ $Info->solusi }}</h6>
                    <p class="card-text text-center mt-3"><small class="text-muted">{{ $Info->created_at }}</small></p>
                </div>
            </div>
            <a href="/dashboard" class="btn btn-danger mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

        </div>
    </div>
</div>

@endsection