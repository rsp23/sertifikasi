@extends('layout.main')

@section('container')

					
					{{-- <div class="card mr-auto ml-2 mt-3" style="width: 16rem;">
						<div class="card-body bg-light">
							
						</div>
					</div> --}}

                    <div class="container mt-3">
                        @if (session()->has('success'))
                        <div class="row justify-content-center">
                            <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
      
                        @endif
                        <div class="row">
                        
                            
                            @foreach ($members as $member)
                                
                            
                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="card h-100  rounded-4 border-0 shadow-c">
                                    <img src="{{ asset('storage/'.$member->gambar) }}" alt="" class="card-img-top rounded-4">
                                    <div class="card-body">
                                        <h3 class="card-tittle">{{ $member->nama }}</h2>
                                        <h5 class="card-tittle">ID:{{ $member->id }}</h4>
                                        {{-- <h5 class="card-tittle">{{ $member->NIK }}</h4> --}}
                                        <h5 class="card-tittle">{{ $member->noHp }}</h4>
                                    </div>
                                    <div class="card-footer border-0 bg-transparant mb-3">
                                        <a href="/member/{{ $member->id }}/edit" class="btn btn-outline-dark border-2 rounded-3 d-inline"> Edit</a>
                                        <a href="/loan/{{ $member->id }}" class="btn btn-outline-dark border-2 rounded-3 d-inline"> Riwayat</a>
                                    </div>
                                
                                </div>

                            </div>
                            @endforeach
                        
                        </div>

                    </div>

{{-- 
                    
                    <div class="container mt-3">
                        <div class="row">
                            @forelse ($members as $member)


                            <div class="col-lg-3 col-sm-6 mb-3">
                                <div class="card h-100  rounded-4 border-0 shadow-c">
                                    <img src="{{ $member->gambar }}" alt="" class="card-img-top rounded-4">
                                    <div class="card-body">
                                        <h4 class="card-tittle">{{ $member->nama }}</h4>
                                        <h2 class="card-tittle">{{ $member->nik }}</h2>
                                        <h2 class="card-tittle">{{ $member->nohp }}</h2>
                                    </div>
                                    <div class="card-footer border-0 bg-transparant mb-3">
                                        <a href="{{ url('/riwayat/'.$member->id) }}" class="btn btn-outline-dark border-2 rounded-3 d-inline">Riwayat</a>
                                    </div>
                                </div>

                            </div>
                            @endforelse
                        </div>

                    </div> --}}
@endsection
				
	