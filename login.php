<!DOCTYPE html>
<html lang="en">

<head>
	<title>Delete User</title>
	<link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
	<style>
		.login-form {
			padding: 50px;
			border: 1px solid red;
			border-radius: 10px;
			width: 30%;
		}
	</style>
</head>

<body>
	<?php
	include "header.php";
	?>
	<div class="" style="display: flex; justify-content:center; align-items:center; min-height:100vh; ">

		<form class="login-form" action="php/login.php" method="post">

			<h4 class="">LOGIN</h4><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>

			<div class="">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
			</div>

			<div class="">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="pass">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Login</button>
			<a href="registration.php" class="link-secondary">Sign Up</a>
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