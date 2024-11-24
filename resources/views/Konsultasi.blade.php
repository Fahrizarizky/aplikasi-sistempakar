@extends('partials.main')
@section('container')

<div class="container mb-3 mt-4">
    <div class="row">
        <div class="col-md-12">
           
          <form action="/hasildiagnosa" method="post">
            <div class="card" style="box-shadow: 1px 1px 12px 4px">
                <div class="card-body">
                    <h4 style="margin-bottom: -0">Daftar Gejala</h4>

                    @if (session()->has('warning'))
                    <div class="alert alert-danger text-center mt-2" role="alert">
                      {{ session('warning') }}
                    </div>
                    @endif

                    <p class="fst-italic" style="margin-bottom: 1px">(Pilihlah gejala yang sedang dirasakan)</p>
                      @csrf
                      <table class="table table-striped table-hover">
                        <thead class="table-dark">
                          <td>No</td>
                          <td>Kode</td>
                          <td>Gejala</td>
                          <td>Deskripsi</td>
                          <td>Pilih Kondisi</td>
                        </thead>
                        @foreach ($Gejala as $gejala)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $gejala->kode_gejala }}</td>
                          <td>{{ $gejala->nama_gejala }}</td>
                          <td>{{ $gejala->deskripsi }}</td>
                          <td>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="0" required>
                              <label class="form-check-label">
                                Tidak
                              </label>
                            </div>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="0.2" required>
                              <label class="form-check-label">
                                Tidak Tahu
                              </label>
                            </div>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="0.4" required>
                              <label class="form-check-label">
                                Mungkin
                              </label>
                            </div>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="0.6" required>
                              <label class="form-check-label">
                                Kemungkinan Besar 
                              </label>
                            </div>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="0.8" required>
                              <label class="form-check-label">
                                Hampir Pasti
                              </label>
                            </div>
                          <div class="form-check me-2">
                              <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]" value="1" required>
                              <label class="form-check-label">
                                Pasti
                              </label>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                  </table>
                  </div>
                  </div>                  
                      <button type="submit" class="btn btn-dark rounded-pill mt-3" style="width: 140px; position:fixed; top:80%; bottom:10%; right:43%; left:42%"><i class="bi bi-card-list"></i> diagnosa</button>
              </form>
            
        </div>
    </div>
</div>



@endsection