<?php
session_start();
if (
	isset($_SESSION['id']) &&
	isset($_SESSION['fname']) &&
	isset($_SESSION['lname']) &&
	isset($_SESSION['email']) &&
	isset($_SESSION['address']) &&
	isset($_SESSION['contactNum'])
) {
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Profile</title>
		<link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
	</head>

	<!-- Nag Internal CSS muna kasi nagkakaproblema sa External CSS-->
	<style>
		/* Para sa list ng navbar sa gilid ng profile page*/
		.sidenav {
			list-style-type: none;
			position: absolute;
			padding: 50px;
			border-radius: 10px;
			margin-top: 5px;
		}

		/* Para sa link ng Profile Navigation Admin*/
		.navlink {
			font-size: 15px;
			padding-bottom: 15px;
		}

		.sidenav2 {
			list-style-type: none;
			position: absolute;
			padding: 50px;
			border-radius: 10px;
			margin-top: 5px;
			width: 17.5%;
			height: 50%;
		}

		/* Para sa link ng Profile Navigation User*/
		.navlink2 {
			font-size: 15px;
			padding-bottom: 15px;
		}

		.avatar-container {
			height: 20%;
			background-image: url("image/bg.png");
			padding-top: 10%;
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
			margin-left: 18%;
			margin-right: 5%;
			margin-top: 5px;
			padding: 4.2%;
			font-size: 25px;
			border: 1px solid white;
			border-radius: 10px;
		}

		/*Para magpantay sa Account Details*/
		.alignMe {
			list-style-type: none;
		}

		.alignMe b {
			display: inline-block;
			width: 50%;
			position: relative;
			padding-left: 20%;
		}

		.alignMe b::after {
			content: ":";
			position: absolute;
			right: 5%;
		}
	</style>

	<body>

		<?php include "header.php";

		if (!$dbConn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		//IMPORTANTTT!!!!!
		$sql = "SELECT * FROM users";
		$result = mysqli_query($dbConn, $sql);
		$users = [];
		if ($result && mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$users[] = $row;
			}
		}

		foreach ($users as $user) : ?>

		<?php endforeach;

		$id = $user['id'];
		$fname = $user['fname'];
		$lname = $user['lname'];
		$email = $user['email'];
		$address = $user['address'];
		$contactNum = $user['contactNum'];
		$profile_img = $user['profile_img'];
		?>



		<div class="avatar-container">
		<img src="profile_picture.php?user_id=<?php $id ?>" alt="Profile Image"  class="avatar">
		</div>

		<?php if (isset($_SESSION['fname']))
			if ($_SESSION['fname'] == "Administrator") {
				echo "<ul class='sidenav'>
				<li class='navlink'>
					<a href='manage_users.php'>Manage Users</a>
				</li>
				<li class='navlink'>
					<a href='gallery_upload.php'>Upload Gallery</a>
				</li>
				<li class='navlink'>
					<a href='bookings.php'>Appointment Bookings</a>
				</li>
				<li class='navlink'>
					<a href='accepted_booking.php'>Accepted Appointments</a>
				</li>
			</ul>"; ?>

		<?php } else {
				echo "<ul class='sidenav2'>
				<li class='navlink2'>
					<a href='edit_user.php'>Edit Profile</a>
				</li>
				<li class='navlink2'>
					<a href=''>Delete Account</a>
				</li>
			</ul>";
			} ?>
		</div>
		<?php include "header.php"; ?>
		<section id="profile-header" class="profile-header">
			<div class="container">
				<div class="row justify-content-start">
					<div class="col-lg-3 col-md-3 col-sm-12 justify-content-center mb-4">
						<div class="image-wrapper">
							<img src="image/avatar.jpg" alt="Avatar" class="avatar">
						</div>
					</div>
					<div class="col-lg-9 col-lg-9 col-sm-9 mb-4">
						<div class="image-wrapper">
							<img src="image/login-header.png" class="img-fluid welcome-back" alt="Welcome Back">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="profile-message" class="profile-message mb-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-12 d-flex align-items-center justify-content-center">
						<h2>What do you want to do today?</h2>
					</div>
				</div>
			</div>
		</section>

		<section id="profile-sidenav" class="profile-sidenav">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 mt-3">
						<div class="profile-controls">
							<?php if (isset($_SESSION['fname'])) {
								if ($_SESSION['fname'] == "Administrator") {
									echo "<ul class='sidenav'>
										<li class='navlink'>
											<i class='fa-regular fa-address-book'></i>&nbsp;&nbsp;&nbsp;
											<a href='manage_users.php'>Manage Users</a>
										</li>
										<li class='navlink'>
											<i class='fa-regular fa-image'></i>&nbsp;&nbsp;&nbsp;
											<a href='gallery_upload.php'>Upload Gallery</a>
										</li>
										<li class='navlink'>
											<i class='fa-regular fa-calendar-check'></i>&nbsp;&nbsp;
											<a href='bookings.php'>Appointment Bookings</a>
										</li>
									</ul>";
								} else {
									echo "<ul class='sidenav2'>
											<li class='navlink2'>
												<i class='fa-regular fa-pen-to-square'></i>&nbsp;&nbsp;&nbsp;
												<a href='edit_user.php'>Edit Profile</a>
											</li>
											<li class='navlink2'>
												<i class='fa-regular fa-trash-can'></i>&nbsp;&nbsp;&nbsp;
												<a href='delete_user.php'>Delete Account</a>
											</li>
										</ul>";
									}
								} ?>
						</div>
						<?php if (isset($_SESSION['fname'])) {
							if ($_SESSION['fname'] != "Administrator") {
								echo "<div class='d-grid'><button class='btn btn-danger btn-sm mt-4 mb-2' id='btn-profile' style='width: 100%;' onclick=\"window.location.href='appointment.php';\">Book an appointment</button></div>";
							}
						} ?>
					</div>

					<div class="col-lg-9 col-md-8 mt-3">
						<div class="profile-details">
							<h3>Account Details</h3>
							<br>
							<?php if (isset($_SESSION['fname']))
								if ($_SESSION['fname'] == "Administrator") {
									echo "<ul class='alignMe'>
								<li><b>Role&nbsp;&nbsp;:&nbsp;&nbsp;</b> " . $_SESSION['fname'] . "&nbsp;&nbsp;&nbsp;<i class='fa-solid fa-crown'></i></li>
								<li><b>Last Name&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['lname'] . "</li>
								<li><b>Email&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['email'] . "</li>
								<li><b>Contact Number&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['contactNum'] . "</li>
								</ul>"; ?>

							<?php } else {
									echo "<ul class='alignMe'>
								<li><b>First Name&nbsp;&nbsp;:&nbsp;&nbsp;</b> " . $_SESSION['fname'] . "</li>
								<li><b>Last Name&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['lname'] . "</li>
								<li><b>Email&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['email'] . "</li>
								<li><b>Address&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['address'] . "</li>
								<li><b>Contact Number&nbsp;&nbsp;:&nbsp;&nbsp;</b> " .  $_SESSION['contactNum'] . "</li>
								</ul>";
								} ?>
						</div>
					</div>
				</div>
			</div>
		</section>


		<button onclick="topFunction()" id="back-to-top" title="Go to top">Top</button>
		<?php
		include 'footer.php';
		?>
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</html>

<?php } else {
	header("Location: login.php");
	exit;
} ?>

