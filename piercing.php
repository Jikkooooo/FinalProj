<!DOCTYPE html>
<html lang="en">

<head>
    <title>Piercing</title>
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
        <h2 class="text-center my-4">Piercing Gallery</h2>
        <div class="gallery">
            <?php


            $sql = "SELECT p_img FROM piercing_gallery";
            $result = mysqli_query($dbConn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="gallery-item">';
                    echo '<img src="gallery/piercing/' . $row['p_img'] . '" alt="Image">';
                    echo '</div>';
                }
            } else {
                echo "No images found.";
            }

            mysqli_close($dbConn);
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>