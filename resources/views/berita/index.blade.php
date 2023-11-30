@extends('layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Edit Pengaduan</h4>
      <form action="{{ route('Pengaduan.update', $pengaduan->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @method('PUT')
        
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Jenis Keluhan</label>
          <input type="text"name="jenis_keluhan" class="form-control" id="exampleInputName1" placeholder="Jenis Keluhan" value="{{ $pengaduan->jenis_keluhan }}">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Nomor Telepon</label>
            <input type="text"name="nomer_tlp" class="form-control" id="exampleInputName1" placeholder="Nomor Telepon" value="{{ $pengaduan->nomer_tlp }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" placeholder="Upload Foto" name="foto" value="" >
            </div>
          </div>
        <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4" value="">{{ $pengaduan->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection