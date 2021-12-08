@extends('layout.main')

@section('container')
<div class="container wraper mt-5">
  @if (session()->has('success'))
    <div class="row justify-content-center">
      <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
      
  @endif
    <h1 class="text-center mt-5"> Riwayat Pinjaman</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
            <th>Kode Buku</th>
          
          <th>Status</th>
          <th>Waktu</th>
          
        </tr>
      </thead>
      <tbody>
 
         @foreach ($loans as $loan)
         <tr>
           
           <td>{{ $loan->buku_kode }}</td>
           
           <td>{{ $loan->status }}</td>
           <td>{{ $loan->created_at }}</td>
           
         </tr>
             
         @endforeach
     

      </tbody>
    </table>
    @endsection