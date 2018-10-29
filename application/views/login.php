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

<body style="background-image: url(<?php echo base_url().'assets/img/black.jpg' ?>); background-size: cover">

	<!-- Login Form -->
	<div class="row">
		<div class="col l6 offset-l3 m10 offset-m1 s12">
			<form class="login" form action="<?php echo base_url(). 'control/check_login'; ?>" method="POST">
				<div class="card-panel" style="background : rgba(0, 0, 0, 0.7); margin-top: 20%"> 
					<h4 class="center white-text light">Login</h4>
					<p class="center white-text light">to continue enter an admin portal</p><br>
					<p class="center white-text light"></p>
					<div class="input-field">
						<input type="text" name="username" id="name">
						<label for="name">Username</label>
					</div>
					<div class="input-field">
						<input type="password" name="password" id="password">
						<label for="password">Password</label>
					</div><br>
					<div class="center">
					<input type="submit" name="Login" value="Login" class="cyan darken-4-effect cyan darken-2 btn"><br>
					</div>
				</div>         
			</form>
		</div>
	</div>
	<!-- Akhir Login Form -->

	

	<script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js' ?>"></script>


</body>
</html>
