
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
    <h1 class="text-center mt-5"> Daftar Buku</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
            <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
 
         @foreach ($books as $book)
         <tr>
           <td>{{ $book->id }}</td>
           <td>{{ $book->judul }}</td>
           <td>{{ $book->pengarang }}</td>
           <td><a class="badge bg-warning" href="/book/{{ $book->id }}/edit">Edit</a>
            <form action="/book/{{ $book->id }}" method="POST" >
              @method('delete')
              @csrf
             
              <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data?')"><span>Hapus</span></button>
              
            </form>
           </td>
         </tr>
             
         @endforeach
     

      </tbody>
    </table>
    @endsection