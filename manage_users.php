<?php
session_start();
include "db_conn.php";
include "header.php";

if (!$dbConn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($dbConn, $sql);
$users = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}
mysqli_close($dbConn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manage Users</title>
    <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">

    <style>
        .search-bar {
            padding-top: 10%;
            max-width: fit-content;
            margin-inline: auto;
        }

        .display-user-details {
            color: white;
            margin-top: 5px;
            padding: 3%;
            font-size: 25px;
            border: 1px solid white;
            border-radius: 10px;
            width: 90%;
            max-width: fit-content;
            margin-inline: auto;
        }

        .alignMe {
            list-style-type: none;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: gray;
        }
    </style>
</head>

<body>
    <?php
    include "db_conn.php";

    if (!$dbConn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <br><br>
    <div class="search-bar" style="display: flex; justify-content:center; align-items:center;">
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="">
                <h3 style="text-align: center;">Search User ID</h3>
                <br>
                <input type="text" name="id" class="form-control" style="height:40px; width:auto" />
                <br>
                <center><input type="submit" name="search" value="Search" style="height:30px; width:70px;" /></center>
            </div>
        </form>
    </div>

    <br><br>
    <div class="display-user-details" style="display: flex; justify-content:center; align-items:center;">
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
                        if (isset($_SESSION['fname']) && $row["fname"] == "Administrator") {
                            echo "<ul class='alignMe'>";
                            echo "<li><p><b>ID</b> :&nbsp;" . $row["id"] . "</p></li>";
                            echo "<li><p><b>Name</b> :&nbsp;" . $row["fname"] . "</p></li>";
                            echo "</ul>";
                        } else {
                            echo "<ul class='alignMe'>";
                            echo "<li><p><b>ID</b> :&nbsp;" . $row["id"] . "</p></li>";
                            echo "<li><p><b>Name</b> :&nbsp;" . $row["fname"] . " " . $row["lname"] . "</p></li>";
                            echo "<li><p><b>Email</b> :&nbsp;" . $row["email"] . "</p></li>";
                            echo "<li><p><b>Username</b> :&nbsp;" . $row["username"] . "</p></li>";
                            echo "<li><p><b>Address</b> :&nbsp;" . $row["address"] . "</p></li>";
                            echo "<li><p><b>Contact Number</b> :&nbsp;" . $row["contactNum"] . "</p></li>";
                            echo "<button style='height:40px; width:120px; border-radius:10px;' onclick=\"window.location.href = 'delete_user.php?id=" . $row["id"] . "';\">Delete User</button>";
                            echo "<button style='height:40px; width:120px; border-radius:10px;' onclick=\"window.location.href = 'edit_user.php?id=" . $row["id"] . "';\">Edit User</button>";
                            echo "</ul>";
                        }
                    } else {
                        echo "Record with an ID no.&nbsp;<b>{$_GET['id']}</b>&nbsp;is not in the database.";
                    }
                }
            }
        }
        ?>
    </div>
    <br>
    <div style="max-width: fit-content; margin-inline: auto;">
        <?php
        echo "<h3>Records displayed using HTML table</h3>";

        echo "<table class='table'>";
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>Name</th>";
        echo "<th scope='col'>Email</th>";
        echo "<th scope='col'>Username</th>";
        echo "<th scope='col'>Address</th>";
        echo "<th scope='col'>Contact Number</th>";
        echo "<th scope='col'>Actions</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Fetch users to populate the table rows
        $sql = "SELECT * FROM users";
        $result = mysqli_query($dbConn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $fullname = ucwords(strtolower($row["fname"] . " " . $row["lname"]));
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $fullname . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["contactNum"] . "</td>";
                echo "<td>";
                echo "<button style='height:30px; width:70px; margin-right:5px;' onclick=\"window.location.href = 'delete_user.php?id=" . $row["id"] . "';\">Delete</button>";
                echo "<button style='height:30px; width:70px;' onclick=\"window.location.href = 'edit_user.php?id=" . $row["id"] . "';\">Edit</button>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No users found</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";

        mysqli_close($dbConn);
        ?>
    </div>
    <br>
    <div style="max-width: fit-content; margin-inline: auto;">
        <center><button style="height:40px; width:170px; border-radius:10px;" onclick="window.location.href = 'profile.php';">Go Back</button></center>
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