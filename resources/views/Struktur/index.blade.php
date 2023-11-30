@extends('layout')



@section('content')
<div class="container" id="img_size ms-auto ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Struktur</h4>
       
        <p class="card-description">
           <a href="{{ route('Struktur.create') }}">+ Tambah Struktur</a>
        </p>
        <div class="table-responsive pt-3">
          <table class="table-bordered">

            <thead>
              <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th >Aksi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($strukturs as $struktur)
                <tr>
                  <td>
                    <img src="{{ asset('storage/'. $struktur->foto) }}" class="size"> 
                  </td>
                    <td>{{$struktur->nama}}</td>
                    <td>{{ $struktur->jabatan }}</td>
                    <div class="button" id="tombol">
                    <td >
                      <a href="{{ route('Struktur.edit', $struktur->id) }}" class="btn btn-primary btn-sm">Edit</a>
              
                      
                      <form action="{{ route('Struktur.destroy', $struktur->id) }}" method="POST">
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