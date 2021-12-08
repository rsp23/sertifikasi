@extends('layout.main')

@section('container')
<div class="container mt-5 wraper">
    <div class="row justify-content-md-center">
      <div class="col-5 bg-secondary text-white m-3">
        <br><br>
        <h1 class="text-center">Masukan Data Anggota</h1>
        <br>
        <form action="/member" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="nik" name="NIK" required>
              @error('NIK')
               <div class="invalid-feedback text-warning">{{ $message }}</div>   
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="isi" name="nama" required>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="nohp" name="noHp" required>
            </div>
          </div>
          
          

          
          <div class="form-group">
            <label for="exampleFormControlFile1">Foto</label>
            <input type="file" class="form-contro l-file  @error('gambar') is-invalid @enderror" id="exampleFormControlFile1" name="gambar" required>
            @error('gambar')
               <div class="invalid-feedback text-warning">{{ $message }}</div>   
          @enderror
          </div> 
          
         
            
            <button type="submit" name="tambah" class="btn btn-warning mb-4">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection