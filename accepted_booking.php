<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accepted Bookings</title>
    <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            padding-top: 10%;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .table-container {
            width: 100%;
            max-width: 1200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid red;

        }

        th {
            background-color: black;
            border: 1px solid red;
        }

        tr:hover {
            background-color: gray;
            opacity: 1;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include "header.php";
    include "db_conn.php";
    ?>
    <div class="container">
        <div class="table-container">
            <?php
            require 'db_conn.php'; // Include database connection

            // Fetch all accepted bookings
            $sql = "SELECT booking.*, users.fname, users.lname, users.username, users.address, users.contactNum 
                    FROM booking
                    LEFT JOIN users ON booking.user_id = users.id
                    WHERE booking.status = 'Accepted'"; // Query to fetch all accepted bookings
            $result = $dbConn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Accepted Bookings</h2>";
                echo "<table>";
                echo "<tr><th>Booking ID</th><th>User ID</th><th>Service</th><th>Appointment Date</th><th>Appointment Time</th><th>User Details</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['book_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['book_service']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['book_date']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['book_time']) . "</td>";
                    echo "<td>";
                    echo "<strong>First Name:</strong> " . (isset($row['fname']) ? htmlspecialchars($row['fname']) : 'N/A') . "<br>";
                    echo "<strong>Last Name:</strong> " . (isset($row['lname']) ? htmlspecialchars($row['lname']) : 'N/A') . "<br>";
                    echo "<strong>Username:</strong> " . (isset($row['username']) ? htmlspecialchars($row['username']) : 'N/A') . "<br>";
                    echo "<strong>Address:</strong> " . (isset($row['address']) ? htmlspecialchars($row['address']) : 'N/A') . "<br>";
                    echo "<strong>Contact Number:</strong> " . (isset($row['contactNum']) ? htmlspecialchars($row['contactNum']) : 'N/A');
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<button class='btn btn-light' onclick='history.back()'>Go Back</button>";
                echo "<a href='bookings.php' class='btn btn-light' role='button' style='margin:10px;'>Appointment Bookings</a>";
            } else {
                echo "<p>No accepted bookings found.</p>";
            }

            $dbConn->close(); // Close the database connection
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