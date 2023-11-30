@extends('layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Edit Jurusan</h4>
      <form action="{{ route('Struktur.update', $struktur->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @method('PUT')
        
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Nama</label>
          <input type="text"name="nama" class="form-control" id="exampleInputName1" placeholder="Masukan Nama" value="{{ $struktur->nama }}">
        </div>

       

        <div class="form-group">
            <label for="exampleTextarea1">jabatan</label>
            <textarea name="jabatan" class="form-control" id="exampleTextarea1" rows="4" value="">{{ $struktur->jabatan }}</textarea>
          </div>

        <div class="form-group">
          <label>Foto</label>
          <div class="input-group col-xs-12">
            <input type="file" class="form-control file-upload-info" placeholder="Upload Foto" name="foto" value="" >
          </div>
        </div>
        

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection