<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
	<style>
		.register-container {
			padding-top: 10%;
		}

		.signup-form {
			padding: 50px;
			border: 1px solid red;
			border-radius: 10px;
			width: 40%;
			max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
		}
	</style>
</head>

<body>
	<?php
	include 'header.php';
	?>
	<div class="register-container" style="display: flex; justify-content:center; align-items:center; min-height:100vh; ">

		<form class="signup-form" action="php/signup.php" method="post">

			<h4 class="">Create Account</h4><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>

			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">First Name</label>
					<input type="text" class="form-control" name="fname" value="<?php echo (isset($_GET['fname'])) ? $_GET['fname'] : "" ?>">
				</div>

				<div class="form-group col-md-6">
					<label class="form-label">Last Name</label>
					<input type="text" class="form-control" name="lname" value="<?php echo (isset($_GET['lname'])) ? $_GET['lname'] : "" ?>">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Username</label>
					<input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
				</div>

				<div class="form-group col-md-6">
					<label class="form-label">Password</label>
					<input type="password" class="form-control" name="pass">
				</div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Email</label>
					<input type="text" class="form-control" name="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Contact Number</label>
					<input type="text" class="form-control" name="contactNum" value="<?php echo (isset($_GET['contactNum'])) ? $_GET['contactNum'] : "" ?>">
				</div>
				
			</div>

			<div class="form-group">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo (isset($_GET['address'])) ? $_GET['address'] : "" ?>">
            </div>

			<br>
			<p><button type="submit" class="btn btn-primary">Sign Up</button>
			Already have an account?<a href="login.php" class="btn btn-link">Login</a></p>
		</form>
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