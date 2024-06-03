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
        <section class="manage-header" id="manage-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-5 align-items-center">
                        <h1>MANAGE USERS</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="search-bar" id="search-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <form class="search-form">
                            <h3 style="text-align: center;">Search User ID</h3>
                            <input type="text" id="searchId" class="form-control" />
                            <input type="button" id="searchButton" value="Search" class="btn btn-primary search-btn mt-2" />
                        </form>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="display-user-details" id="userDetails"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-4">
            <center>
                <h3>Records User</h3>
            </center>
            <table id="userTable" class="table table-bordered table-striped">
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
                                <button class="btn btn-danger btn-delete mt-2" data-id="<?php echo $user['id']; ?>">Delete</button>
                                <button class="btn btn-primary btn-edit mt-2" data-id="<?php echo $user['id']; ?>">Edit</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <br>
        <div class="container mt-4 text-center">
            <button class="btn btn-secondary btn-back" onclick="window.location.href = 'profile.php';">Go Back</button>
        </div>
        <br>
        <br>
        <br>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const users = <?php echo json_encode($users); ?>;

                document.getElementById('searchButton').addEventListener('click', () => {
                    const searchId = document.getElementById('searchId').value;
                    const user = users.find(user => user.id == searchId);
                    const userDetails = document.getElementById('userDetails');

                    if (user) {
                        userDetails.innerHTML = `
                            <ul class='alignMe'>
                                <li><p><b>ID</b> :&nbsp;${user.id}</p></li>
                                <li><p><b>Name</b> :&nbsp;${user.fname} ${user.lname}</p></li>
                                <li><p><b>Email</b> :&nbsp;${user.email}</p></li>
                                <li><p><b>Username</b> :&nbsp;${user.username}</p></li>
                                <li><p><b>Address</b> :&nbsp;${user.address}</p></li>
                                <li><p><b>Contact Number</b> :&nbsp;${user.contactNum}</p></li>
                                <button class='btn btn-danger btn-delete' style='margin: 5px; font-size:20px;' onclick="window.location.href = 'delete_user.php?id=${user.id}';">Delete User</button>
                                <button class='btn btn-primary btn-edit' style='margin: 5px; font-size:20px;' onclick="window.location.href = 'edit_user.php?id=${user.id}';">Edit User</button>
                            </ul>
                        `;
                    } else {
                        userDetails.innerHTML = `Record with an ID no.&nbsp;<b>${searchId}</b>&nbsp;is not in the database.`;
                    }
                });

                document.querySelectorAll('.deleteBtn').forEach(button => {
                    button.addEventListener('click', (event) => {
                        const userId = event.target.getAttribute('data-id');
                        if (confirm(`Are you sure you want to delete user ID ${userId}?`)) {
                            window.location.href = `delete_user.php?id=${userId}`;
                        }
                    });
                });

                document.querySelectorAll('.editBtn').forEach(button => {
                    button.addEventListener('click', (event) => {
                        const userId = event.target.getAttribute('data-id');
                        window.location.href = `edit_user.php?id=${userId}`;
                    });
                });
            });
        </script>
        <button onclick="topFunction()" id="back-to-top" title="Go to top">Top</button>
        <?php
        include 'footer.php';
        ?>
    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>