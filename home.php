<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>Home</title>
	</head>

	<body>
		<!--navbar with bootstrap -->
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
						</li>
						<!-- Dropdown content -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALLERY </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">TATTOO</a>
								<a class="dropdown-item" href="#">PIERCING</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">SHOP</a>
						</li>
						<li class="nav-item">
							<a href="index.php"><img src="image/toxzlogo.png" width="70px"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">ABOUT</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="registration.php">LOG-IN</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="" style="display: flex; justify-content:center; align-items:center; min-height:100vh;">

			<div class="shadow w-450 p-3 text-center">
				<h3 class="display-4 ">Hello, <?= $_SESSION['fname'] ?> <?= $_SESSION['lname'] ?></h3>
				<a href="logout.php" class="btn btn-warning">
					Logout
				</a>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</html>

<?php } else {
	header("Location: login.php");
	exit;
} ?>