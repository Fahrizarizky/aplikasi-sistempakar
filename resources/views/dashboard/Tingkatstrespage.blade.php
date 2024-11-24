@extends('dashboard.partials.main')
@section('container')

          <h2>Daftar Tingkat Stres</h2>
          <a href="/dashboard/tambahtingkatstres" class="btn btn-success mb-2"><i class="bi bi-plus-square"></i> Tingkat</a>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <td>No</td>
              <td>Tingkat Stres</td>
              <td>Kode Tingkat Stres</td>
              <td>Solusi</td>
              <td>Aksi</td>
            </thead>
        
            @foreach ($Tingkatstres as $tingkatstres)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $tingkatstres->nama_tingkatstres }}</td>
              <td>{{ $tingkatstres->kode_tingkatstres }}</td>
              <td>{{ $tingkatstres->solusi_stres }}</td>
              <td> 
               <a href="/edittingkatstres/{{ $tingkatstres->id }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
               <form class="d-inline" action="/hapustingkatstres/{{ $tingkatstres->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus tingkat stres ini ?')" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </table>

@endsection


 

