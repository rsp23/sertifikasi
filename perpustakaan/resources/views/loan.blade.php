@extends('layout.main')

@section('container')
<div class="container mt-5 wraper">
    <div class="row justify-content-md-center">
      <div class="col-5 bg-secondary text-white m-3">
        <br><br>
        <h1 class="text-center">Masukan Data</h1>
        <br>
        <form action="{{ url('loan') }}" method="POST">
            @csrf
          <div class="form-group row">
            <label for="member_id" class="col-sm-2 col-form-label">ID Anggota</label>
            <div class="col-sm-10">
              <input  type="number" class="form-control @error('member_id') is-invalid @enderror" id="member_id" name="member_id" required>
              @error('member_id')
               <div class="invalid-feedback text-warning">{{ $message }}</div>   
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="buku_kode" class="col-sm-2 col-form-label">Kode Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('buku_kode') is-invalid @enderror" id="buku_kode" name="buku_kode" required>
              @error('buku_kode')
              <div class="invalid-feedback text-warning">{{ $message }}</div>   
             @enderror
            </div>
          </div>
          <input type="hidden" id="status" name="status" value="Pinjam">
          

         
          <div class="form-group">
            
            <button type="submit" name="tambah" class="btn btn-warning mb-4">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection