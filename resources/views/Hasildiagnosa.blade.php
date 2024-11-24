@extends('partials.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-8">

            <div class="card mb-3 mt-3" style="max-width: auto;box-shadow: 1px 1px 12px 4px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/bgpsikolog.png') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h4>Hasil Diagnosa : </h4>
                      <h1>{{ $hasildiagnosa->tingkatstres_siswa }}</h1>
                      <hr>
                      <h4>Saran : </h4>
                      <ol class="list-group">
                        @foreach ($solusi as $item)
                        <li class="fw-bold">{{ $item }}</li>
                        @endforeach
                      </ol>
                      <p class="card-text"><small class="text-muted">{{ $hasildiagnosa->created_at }}</small></p>
                    </div>
                  </div>
                </div>
              </div>

            {{-- <div class="card border-dark border-3">
                <div class="card-body">
                    <img src="{{ asset('assets/bgpsikolog.png') }}" style="size:200px" class="img-thumbnail" alt="...">
                    <h5 class="card-title text-muted">Tingkat stres yang anda alami : </h5><h2 class="text-title text-center">{{ $hasildiagnosa->tingkatstres_siswa }}</h2>
                    <h5 class="card-title text-muted">Gejala yang anda alami : </h5><h4 class="card-subtitle mb-2">{{ $hasildiagnosa->gejaladialami_siswa }}</h4>
                    <h5 class="card-title text-muted">Solusi yang disarankan : </h5><h4 class="card-subtitle">{{ $hasildiagnosa->solusi }}</h4>
                </div>
            </div> --}}

            <a href="/" class="btn btn-dark mt-3"><i class="bi bi-arrow-left-square-fill"></i> Back</a>

        </div>
    </div>

@endsection