<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Sign Up</title>

<body>
	<?php
	include "navbar.php";
	?>
	<div class="" style="display: flex; justify-content:center; align-items:center; min-height:100vh; ">

		<form class="" action="php/signup.php" method="post" style="background-color:red;">

			<h4 class="">Create Account</h4><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="error" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>

			<?php if (isset($_GET['success'])) { ?>
				<div class="succeed" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>
			<div class="signUpTxtField">
				<label class="form-label">First Name</label>
				<input type="text" class="form-control" name="fname" value="<?php echo (isset($_GET['fname'])) ? $_GET['fname'] : "" ?>">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Last Name</label>
				<input type="text" class="form-control" name="lname" value="<?php echo (isset($_GET['lname'])) ? $_GET['lname'] : "" ?>">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="pass">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Address</label>
				<input type="text" class="form-control" name="address" value="<?php echo (isset($_GET['address'])) ? $_GET['address'] : "" ?>">
			</div>

			<div class="signUpTxtField">
				<label class="form-label">Contact Number</label>
				<input type="text" class="form-control" name="contactNum" value="<?php echo (isset($_GET['contactNum'])) ? $_GET['contactNum'] : "" ?>">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Sign Up</button>
			<a href="login.php" class="link-secondary">Login</a>
		</form>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>