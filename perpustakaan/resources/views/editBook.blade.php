@extends('layout.main')

@section('container')
<div class="container mt-5 wraper">
    <div class="row justify-content-md-center">
      <div class="col-5 bg-secondary text-white m-3">
        <br><br>
        <h1 class="text-center">Masukan Data Buku</h1>
        <br>
        <form action="/book/{{ $book->id }}" method="POST">
            @method('put')
            @csrf
          
          <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ $book->judul }}" required>
              @error('judul')
              <div class="invalid-feedback text-warning">{{ $message }}</div>   
             @enderror
            </div>
          </div>
         
          <div class="form-group row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $book->pengarang }}" required>
            </div>
          </div>
          

         
          <div class="form-group">
            
            <button type="submit" name="tambah" class="btn btn-warning mb-4">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection