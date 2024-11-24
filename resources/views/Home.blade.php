@extends('partials.main')
@section('container')

    <div class="row justify-content-center">
        <div class="col-6">
    
            <div class="card mb-3 mt-3" style="max-width: auto;box-shadow: 1px 1px 12px 4px">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/logoumri.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      {{-- <h5 class="card-title">Card title</h5> --}}
                      <p class="card-text">"Hai @auth {{ auth()->user()->nama }} @endauth, Selamat datang di website sistem pakar ini, saya yang akan  membantu anda memahami dan mengatasi masalah yang Anda hadapi.
                        Sistem pakar ini dirancang untuk membantu anda mendapatkan informasi dan saran tentang tingkat stres yang sedang dialami. Sistem ini tidak dimaksudkan untuk menggantikan terapi dengan psikolog, namun dapat menjadi langkah awal yang bermanfaat." 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
    
        </div>
    </div>

@if (auth()->check())
<a class="btn btn-dark rounded-pill" style="width: 140px; position:fixed; top:60%; bottom:34%; right:41%; left:44%;" href="/konsultasi"><i class="bi bi-people-fill"></i> Konsultasi</a>
@endif

@endsection