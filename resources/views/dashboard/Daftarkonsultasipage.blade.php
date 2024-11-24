@extends('dashboard.partials.main')
@section('container')

          <h2>Daftar Konsultasi</h2>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <td>No</td>
              <td>Email</td>
              <td>Nama</td>
              <td>Hasil Diagnosa</td>
              <td>Aksi</td>
            </thead>
            @foreach ($Konsultasi as $konsultasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $konsultasi->email }}</td>
              <td>{{ $konsultasi->nama_siswa }}</td>
              <td>{{ $konsultasi->tingkatstres_siswa }}</td>
              <td> 
               <a href="/daftarkonsultasi/{{ $konsultasi->id }}/info" class="btn btn-primary"><i class="bi bi-info-square-fill"></i></a>
               <form class="d-inline" action="/hapusdaftarkonsultasi/{{ $konsultasi->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapusnya ?')" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </table>

@endsection


 

