<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking</title>
    <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .gallery img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .gallery-item {
            flex-basis: calc(33.333% - 10px);
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .gallery-item {
                flex-basis: calc(50% - 10px);
            }
        }

        @media (max-width: 576px) {
            .gallery-item {
                flex-basis: 100%;
            }
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include "header.php";
    if (!isset($_SESSION['id'])) {

        header("Location: login.php");
        exit();
    }
    ?>
    <br>
    <br>
    <div class="container" style="padding-top: 10%;">
        <?php
        require 'db_conn.php';

        // Fetch bookings from the database
        $sql = "SELECT booking.*, users.fname, users.lname, users.username, users.address, users.contactNum 
        FROM booking
        LEFT JOIN users ON booking.user_id = users.id
        ORDER BY booking.book_date DESC, booking.book_time DESC";
        $result = $dbConn->query($sql);
        ?>

        <div class="container mt-5">
            <h2 class="mb-4">Dashboard</h2>

            <?php if ($result->num_rows > 0) : ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>User ID</th>
                            <th>Service</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Message</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['book_id']); ?></td>
                                <td><?php echo isset($row['user_id']) ? htmlspecialchars($row['user_id']) : 'N/A'; ?></td>
                                <td><?php echo htmlspecialchars($row['book_service']); ?></td>
                                <td><?php echo htmlspecialchars($row['book_date']); ?></td>
                                <td><?php echo htmlspecialchars($row['book_time']); ?></td>
                                <td><?php echo htmlspecialchars($row['book_msg']); ?></td>
                                <td><?php echo isset($row['fname']) ? htmlspecialchars($row['fname']) : 'N/A'; ?></td>
                                <td><?php echo isset($row['lname']) ? htmlspecialchars($row['lname']) : 'N/A'; ?></td>
                                <td><?php echo isset($row['username']) ? htmlspecialchars($row['username']) : 'N/A'; ?></td>
                                <td><?php echo isset($row['address']) ? htmlspecialchars($row['address']) : 'N/A'; ?></td>
                                <td><?php echo isset($row['contactNum']) ? htmlspecialchars($row['contactNum']) : 'N/A'; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="alert alert-info">No data found.</p>
            <?php endif; ?>

            <?php $dbConn->close(); // Close the database connection 
            ?>
        </div>

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