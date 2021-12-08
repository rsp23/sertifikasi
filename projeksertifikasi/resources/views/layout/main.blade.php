
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
	<style>

	</style>
	<title>Homepage</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
		<div class="container">
			<h3><i class="fas fa-wine-bottle text-success mr-2"></i></h3>
			<a class="navbar-brand font-weight-bold" href="#">Parfum Shop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-4">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#hubungi">Hubungi Kami <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#bantuan">Bantuan<span class="sr-only">(current)</span></a>
					</li>

					
				</ul>
				<form class="form-inline my-2 my-lg-0" action="" method="POST">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
				</form>
				<div class="icon mt-2">
					<h5>
						<a href="/cekout" class="text-dark"><i class="fas fa-cart-plus mr-3 ml-3" data-toggle="tooltip" title="Keranjang belanja"></i></a>
						<a href="/order" class="text-dark"><i class="fas fa-check-square mr-3" data-toggle="tooltip" title="transaksi Selesai"></i></a>
						

					</h5>

				</div>
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user"></i>
							
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="logout.php">LOGOUT</a>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="row mt-5 no-gutters">
		{{-- <div class="col-md-2 bg-light">
			<h2 class="mt-2 text-center pl-2 pr-2">Selamat Datang</h2>
			<h2 class=" text-center pl-2 pr-2"> di Rsp Parfum Shop</h2>
			<p class="pl-2 pr-2 text-center">Rsp parfum shop adalah toko parfum berkualitas yang berdiri tahun 2020
			Toko kami selalu menjaga kualitas dari suatu parfum agar pengguna dapat merasakan sensasi harum yang lebih pekat, lembut dan juga tahan lama</p>
		</div> --}}
		<!-- md-2 -->
        <div class="col-md-1">

        </div>
		<div class="col-md-10">
			@yield('container')
		</div>
		<!-- md-10 -->
        <div class="col-md-1">

        </div>
	</div>
	<!-- rows -->



<footer class="bg-dark text-white p-5">
	<div class="row">
		<div class="col-md-4 ">
			<p class="text-center font-weight-bold" id="hubungi">Hubungi Kami</p>
			<p class="text-center"> melalui nomer ini 081228430858</p>
		</div>
		<div class="col-md-4 ">
			<p class="text-center font-weight-bold" id="bantuan">Pusat Bantuan</p>
			<p class="text-center">Jika ingin menayakan sesuatu dapat melalui</p>
			<p class="text-center">Email radescaputra23@gmail.com</p>
		</div>
		<div class="col-md-4 ">
			<p class="text-center font-weight-bold">Media Sosial</p>
			<p class="text-center"><a href="https://www.instagram.com/radescasp/" class="text-center text-white"><i class="fab fa-instagram text-white"></i> radescasp</a></p>
			
		</div>
	</div>
</footer>


<div class="copyright text-center text-white font-weight-bold bg-warning p-2">
	<p class="mt-2">Developed by Radesca Copyright <i class="far fa-copyright"></i> 2020</p>
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