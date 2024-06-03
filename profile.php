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
			padding-top: 5%;
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

		<div class="display-profile-details">
			<h3 style="padding-left: 22%;">Account Details</h3>
			<br>
			<?php if (isset($_SESSION['fname']))
				if ($_SESSION['fname'] == "Administrator") {
					echo "<ul class='alignMe'>
				<li><b> Role</b> " . $_SESSION['fname'] . "</li>
		  		</ul>"; ?>

			<?php } else {
					echo "<ul class='alignMe'>
				<li><b>First Name</b> " . $_SESSION['fname'] . "</li>
				<li><b>Last Name</b> " .  $_SESSION['lname'] . "</li>
				<li><b>Email</b> " .  $_SESSION['email'] . "</li>
				<li><b>Address</b> " .  $_SESSION['address'] . "</li>
				<li><b>Contact Number</b> " .  $_SESSION['contactNum'] . "</li>
		  		</ul>";
				} ?>

		</div>
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

