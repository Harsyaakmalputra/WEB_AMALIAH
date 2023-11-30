@extends('layout')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Tambah Jurusan</h4>
      <form action="{{ route('Jurusan.index') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Nama_Jurusan</label>
          <input type="text"name="nama_jurusan" class="form-control" id="exampleInputName1" placeholder="Masukan Nama Jurusan">
        </div>

        <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>


        <div class="form-group">
          <label>Gambar Jurusan</label>
          
          <div class="input-group col-xs-12">
            <input type="file" class="form-control file-upload-info" placeholder="Upload Gambar" name="foto">
            
          </div>
        </div>
        

        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection