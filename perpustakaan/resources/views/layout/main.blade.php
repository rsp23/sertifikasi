<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/203cfc571f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="shop-homepage.css">


	<title>{{ $siteName }}</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
		<div class="container">
			
			<a class="navbar-brand font-weight-bold" href="#">PERPUSTAKAAN</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-4">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        
					</li>
                    <li class="nav-item active">
						
                        <a class="nav-link" href="/book">Buku <span class="sr-only">(current)</span></a>
					</li>
				

					
				</ul>
				
				<div class="icon mt-2 ml-3">
					<h5>
						
						<a href="/loan" class="text-dark"><i class="fas fa-check-square mr-3" data-toggle="tooltip" title="Transaksi Pelanggan"></i></a>
						

					</h5>

				</div>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						
					</li>
				</ul>
			</div>
		</div>
	</nav>

<div class="wraper">
	<div class="row mt-5 no-gutters">
		<div class="col-md-2 bg-light pl-2">
			<h2 class="mt-2 text-center pl-2 pr-2">Pendataan</h2>
			<h2 class=" text-center pl-2 pr-2">Perpustakaan</h2>
			
            <div class="d-grid gap-2 col-10 mx-auto">
                <div class="btn-group-vertical">
                <a href="/member/create" class="btn btn-secondary"> Input Anggota</a>
                <a href="/book/create" class="btn btn-secondary"> Tambah Buku</a>
				<a href="/loan/create" class="btn btn-secondary"> Pinjam</a>
				<a href="/backLoan" class="btn btn-secondary"> Kembali</a>
              </div>
            </div>
              
		</div>
		<!-- md-2 -->

		<div class="col-md-10">
			
			<div class="row mx-auto">

				


            @yield('container')
					
				
					
				
			</div>
		</div>
		<!-- md-10 -->

	</div>
	<!-- rows -->

</div>






	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>