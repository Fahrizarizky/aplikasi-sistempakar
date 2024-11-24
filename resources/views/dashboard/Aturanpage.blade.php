@extends('dashboard.partials.main')
@section('container')

          <h2>Daftar Aturan</h2>
          <a href="/dashboard/tambahaturan" class="btn btn-success mb-2"><i class="bi bi-plus-square"></i> Aturan</a>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <td>No</td>
              <td>Id Gejala</td>
              <td>Id Tingkat Stres</td>
              <td>Bobot</td>
              <td>Aksi</td>
            </thead>
        
            @foreach ($Aturan as $aturan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $aturan->gejala_id }}</td>
              <td>{{ $aturan->tingkatstres_id }}</td>
              <td>{{ $aturan->bobot }}</td>
              <td> 
               <a href="/editaturan/{{ $aturan->id }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
               <form class="d-inline" action="/hapusaturan/{{ $aturan->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus aturan ini ?')" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </table>

@endsection


 

