@extends('layout')



@section('content')
<div class="container" id="img_size ms-auto ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Jurusan</h4>
       
        <p class="card-description">
           <a href="{{ route('Jurusan.create') }}">+ Tambah Jurusan</a>
        </p>
        <div class="table-responsive pt-3" >
          <table class="table-bordered ">
            <thead>
              <tr>
                <th>Foto</th>
                <th>Nama_jurusan</th>
                <th>Deskripsi</th>
                <th >Aksi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($jurusans as $jurusan)
                <tr>
                  <td>
                    <img src="{{ asset('storage/'. $jurusan->foto) }}" class="size"> 
                  </td>
                    <td>{{$jurusan->nama_jurusan }}</td>
                    <td>{{ $jurusan->deskripsi }}</td>
                    <div class="button" id="tombol">
                    <td >
                      <a href="{{ route('Jurusan.edit', $jurusan->id) }}" class="btn btn-primary btn-sm">Edit</a>
              
                      
                      <form action="{{ route('Jurusan.destroy', $jurusan->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                    </td>
                  </div>
                      </form>
                </tr>
                @endforeach



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection