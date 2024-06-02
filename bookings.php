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
    include "db_conn.php";
    ?>
    <br>
    <br>
    <div class="container" style="padding-top: 10%;">
        
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