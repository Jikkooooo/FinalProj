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
    </head>

<body>
    <div class="search-bar" style="display: flex; justify-content:center; align-items:center;">
        <form id="searchForm">
            <div class="">
                <h3 style="text-align: center;">Search User ID</h3>
                <br>
                <input type="text" id="searchId" class="form-control" style="height:40px; width:auto" />
                <br>
                <center><input type="button" id="searchButton" value="Search" style="height:30px; width:70px;" /></center>
            </div>
        </form>
    </div>

    <br><br>
    <div class="display-user-details" id="userDetails" style="display: flex; justify-content:center; align-items:center;">
    </div>

    <br>
    <div style="max-width: fit-content; margin-inline: auto;">
        <center>
            <h3>Records User</h3>
        </center>
        <table id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo ucwords(strtolower($user['fname'] . " " . $user['lname'])); ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['contactNum']; ?></td>
                        <td>
                            <button class="deleteBtn" data-id="<?php echo $user['id']; ?>">Delete</button>
                            <button class="editBtn" data-id="<?php echo $user['id']; ?>">Edit</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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