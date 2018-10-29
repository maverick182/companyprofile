<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/materialize.min.css' ?>"  media="screen,projection"/>  
	<!-- Icon CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- my CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/mycss.css' ?>">
</head>

<body>

	<!-- Navbar Blog-->
	<div class="navbar-fixed">
		<nav class=" cyan darken-2">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" data-target="mobile_navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<a href="<?php echo base_url().'blog' ?>" class="brand-logo center">Fajria Article</a>
					<ul class="left hide-on-med-and-down">
						<li><a href="<?php echo base_url().'home' ?>"><i class="material-icons">home</i></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!--Side Mobile Navbar -->
	<ul class="sidenav" id="mobile_navbar">
		<li><a href="<?php echo base_url().'home' ?>"><i class="material-icons">home</i></a></li>
	</ul>
	<!--Side Mobile Navbar -->

	<!-- Akhir Nabar Blog -->
	<br><br><br>

	

	<!-- Kolom Berita --> 
	<section class="berita scrollspy" id="berita">
		<div class="container berita">
			<div class="row">
				<div class="col s12 m8 ">
					<div class="card small">
						<div class="card-image">
							<img src="<?php echo base_url().'assets/img/urban1.jpg' ?>">
							<span class="card-title">How to make a coffee</span>
						</div>
						<div class="card-content">
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
						<div class="card-action">
							<a href="#" class="cyan-text">Read More</a>
						</div>
					</div><br>
					<div class="card small">
						<div class="card-image">
							<img src="<?php echo base_url().'assets/img/urban1.jpg' ?>">
							<span class="card-title">How to make a coffee</span>
						</div>
						<div class="card-content">
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
						<div class="card-action">
							<a href="#" class="cyan-text">Read More</a>
						</div>
					</div><br>
					<div class="card small">
						<div class="card-image">
							<img src="<?php echo base_url().'assets/img/urban1.jpg' ?>">
							<span class="card-title">How to make a coffee</span>
						</div>
						<div class="card-content">
							<p>I am a very simple card. I am good at containing small bits of information.
							I am convenient because I require little markup to use effectively.</p>
						</div>
						<div class="card-action">
							<a href="#" class="cyan-text">Read More</a>
						</div>
					</div><br>
				</div>
				<div class="col s12 m4">
					<ul class="collection width-header">
						<li class="collection-header"><h6><center><b>Recent Post</b></center></h6></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
						<li class="collection-item"><a href="">How to make a coffee</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Kolom Berita -->

	<!-- Footer -->
	<footer class=" cyan darken-4">
		<div class="center white-text light">
			<p>Copyright © 2018 PT. Fajria Fajar Asia  |  All Right Reserved  |  Contact Us :  021-8897 7497</p>
		</div>
	</footer>
	<!-- Akhir Footer -->
















	<script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js' ?>"></script>
	<!-- Aktivasi JavaScript untuk Mobile Navbar -->
	<script>
		const sideNav = document.querySelectorAll('.sidenav');
		M.Sidenav.init(sideNav);
	</script>
	<!-- Akhir Aktivasi JavaScript untuk Mobile Navbar -->

	<!-- Aktivasi JavaScript untuk Slider -->
	<script>
		const slider = document.querySelectorAll('.slider');
		M.Slider.init(slider,{
			indicators: false,
			height: 300,
			transition: 600,
			interval: 2500
		});
	</script>
	<!-- Akhir Aktivasi JavaScript untuk Slider -->

	<!-- Scrollspy -->
	<script>
		const scrollspy = document.querySelectorAll('.scrollspy');
		M.ScrollSpy.init(scrollspy,{
			scrollOffset: 70,
			throttle: 20
		});
	</script>
	<!-- AKhir Scrollspy -->

</body>
</html>
