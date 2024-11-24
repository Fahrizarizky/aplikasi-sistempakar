@extends('dashboard.partials.main')
@section('container')

          <h2>Daftar Akun</h2>
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <td>No</td>
              <td>Nama</td>
              <td>Nama Sekolah</td>
              <td>Kelas</td>
              <td>Jurusan</td>
              <td>Email</td>
              <td>Aksi</td>
            </thead>
        
            @foreach ($Akun as $akun)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $akun->nama }}</td>
              <td>{{ $akun->nama_sekolah }}</td>
              <td>{{ $akun->kelas }}</td>
              <td>{{ $akun->jurusan }}</td>
              <td>{{ $akun->email }}</td>
              <td> 
               <a href="/editdaftarakun/{{ $akun->id }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a>
               <form action="/deletedaftarakun/{{ $akun->id }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('apakah anda yakin ingin menghapus akun ini ?')" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </table>

@endsection


 

