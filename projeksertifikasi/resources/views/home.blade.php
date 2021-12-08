@extends('layout.main')

@section('container')
	

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/4.png" class="d-block w-100"  alt="..." height="350px">
					</div>
					<div class="carousel-item">
						<img src="img/1.jpg" class="d-block w-100"  alt="..." height="350px">
					</div>
					<div class="carousel-item">
						<img src="img/2.png" class="d-block w-100"  alt="..." height="350px">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row mx-auto">

				       <?php 
  /*
    foreach ($produk as $row) {
      # code...
    
 */
 ?>

				<div class="card mr-auto ml-2 mt-3" style="width: 16rem;">
				
				</div>
<?php 
//} ?>
			</div>

@endsection
		