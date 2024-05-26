<?php
session_start();
if (isset($_SESSION['id']) && 
isset($_SESSION['fname']) && 
isset($_SESSION['lname']) && 
isset($_SESSION['email']) &&
isset($_SESSION['address']) &&
isset($_SESSION['contactNum'])) {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>PROFILE</title>
	</head>

	<!-- Nag Internal CSS muna kasi nagkakaproblema sa External CSS-->
	<style>
		/* Para sa list ng navbar sa gilid ng profile page*/
		.sidenav {
			list-style-type: none;
			position: absolute;
			padding: 50px;
			border-radius: 10px;
		}

		/* Para sa link ng Profile Navigation*/
		.navlink {
			font-size: 25px;
		}

		.avatar-container {
			height: 20%;
			background-image: url("image/bg.png");

		}

		.avatar {
			vertical-align: middle;
			margin-left: 10%;
			width: 250px;
			height: 250px;
			border-radius: 50%;
		}

		.display-profile-details {
			color: white;
			margin-left: 15%;
			margin-right: 5%;
			margin-top: 5px;
			padding: 50px;
			font-size: 25px;
			border: 1px solid white;
			border-radius: 10px;
		}

		.detail-txt {
			position: relative;
			border-radius: 5px;
			width: 40%;
		}

			/*Para sa Account Details*/
		.alignMe {
			list-style-type: none;
		}

		.alignMe b {
			display:inline-block;
			width: 50%;
			position: relative;
			padding-left: 20%;
		}

		.alignMe b::after {
			content: ":";
			position: absolute;
			right: 20%;
		}
	</style>

	<body>
		<?php include "navbar.php"; ?>
		<div class="avatar-container">
			<img src="image/avatar.jpg" alt="Avatar" class="avatar">
		</div>

		<div class="profile-sidenav">
			<ul class="sidenav">
				<li class="navlink">
					<a href="">Edit Profile</a>
				</li>
				<li class="navlink">
					<a href="">Delete Account</a>
				</li>
			</ul>
		</div>

		<div class="display-profile-details">
			<h3 style="padding-left: 22%;">Account Details</h3>
			<br>
			<?php if (isset($_SESSION['fname']))
				echo "
			<ul class='alignMe'>
				<li><b>First Name</b> " . $_SESSION['fname'] . "</li>
				<li><b>Last Name</b> " .  $_SESSION['lname'] . "</li>
				<li><b>Email</b> " .  $_SESSION['email'] . "</li>
				<li><b>Address</b> " .  $_SESSION['address'] . "</li>
				<li><b>Contact Number</b> " .  $_SESSION['contactNum'] . "</li>
		  	</ul>"; ?>

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