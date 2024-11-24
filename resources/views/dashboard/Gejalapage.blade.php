@extends('dashboard.partials.main')
@section('container')

          <h2>Daftar Gejala</h2>
          <a href="/dashboard/tambahgejala" class="btn btn-success mb-2"><i class="bi bi-plus-square"></i> Gejala</a>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <td>No</td>
              <td>Kode</td>
              <td>Gejala</td>
              <td>Deskripsi</td>
              <td>Aksi</td>
            </thead>
        
            @foreach ($Gejala as $gejala)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $gejala->kode_gejala }}</td>
              <td>{{ $gejala->nama_gejala }}</td>
              <td>{{ $gejala->deskripsi }}</td>
              <td> 
               <a href="/editgejala/{{ $gejala->id }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
               <form action="/deletegejala/{{ $gejala->id }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus gejala ini ?')" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </table>

@endsection


 

