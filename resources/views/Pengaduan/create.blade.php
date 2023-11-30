@extends('layout')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Tambah Pengaduan</h4>
      <form action="{{ route('Pengaduan.index') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Jenis Keluhan</label>
          <input type="text"name="jenis_keluhan" class="form-control" id="exampleInputName1" placeholder="Jenis Keluhan">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Nomor Telepon</label>
            <input type="text"name="nomer_tlp" class="form-control" id="exampleInputName1" placeholder="Nomor Telepon">
          </div>
          <div class="form-group">
            <label>Foto</label>
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" placeholder="Upload Foto" name="foto">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection