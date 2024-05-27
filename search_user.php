<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Search User</title>
    <style>
        .display-user-details {
			color: white;
			margin-top: 5px;
			padding: 3%;
			font-size: 25px;
			border: 1px solid white;
			border-radius: 10px;
		}

        .alignMe {
			list-style-type: none;
		}
	</style>
</head>

<body>
    <?php
    session_start();
    include "db_conn.php";
    include "navbar.php";
    $dbConn = mysqli_connect("localhost", "root", "", "auth_db"); //PROCEDURAL

    // Check connection
    if (!$dbConn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <br><br>
    <div class="" style="display: flex; justify-content:center; align-items:center; ">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="">
                <h3 style="text-align: center;">Search User ID</h3>
                <br>
                <input type="text" name="id" class="form-control" />
                <input type="submit" name="search" value="Search" />
            </div>
        </form>
    </div>

    <br><br>
    <div class="display-user-details" style="display: flex; justify-content:center; align-items:center; ">
        <?php
        if (isset($_GET['search'])) {
            if (isset($_GET['id'])) {
                $id = (int) $_GET['id'];
                $sql = "SELECT * FROM users WHERE id = " . $id;

                $result = mysqli_query($dbConn, $sql);


                if (!$result) {
                    printf("Error: %s\n", mysqli_error($dbConn));
                    exit();
                } else {

                    if ($row = mysqli_fetch_assoc($result)) {
                        if (isset($_SESSION['fname']))
                            if ($row["fname"] == "Administrator") {
                                echo "<ul class='alignMe'>";
                                echo "<li><p><b>ID</b> :&nbsp;" . $row["id"] . "</p></li>";
                                echo "<li><p><b>Name</b> :&nbsp;" . $row["fname"] . "</p></li>";
                                echo "</ul>";
                            } else {
                                echo "<ul class='alignMe'>";
                                echo "<li> <p><b>ID</b> :&nbsp;" . $row["id"] . "</p></li>";
                                echo "<li><p><b>Name</b> :&nbsp;" . $row["fname"] . "" . $row["lname"] . "</p></li>";
                                echo "<li><p><b>Email</b> :&nbsp;" . $row["email"] . "</p></li>";
                                echo "<li><p><b>Username</b> :&nbsp;" . $row["username"] . "</p></li>";
                                echo "<li><p><b>Address</b> :&nbsp;" . $row["address"] . "</p></li>";
                                echo "<li><p><b>Contact Number</b> :&nbsp;" . $row["contactNum"] . "</p></li>";
                            }
                    } else
                        echo "Record with an ID no. {$_GET['id']} is not in the database.";
                }
            }
        }
        mysqli_close($dbConn);
        ?>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>