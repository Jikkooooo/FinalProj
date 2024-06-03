<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload</title>
    <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
</head>

<body>
    <?php
    session_start();
    include "header.php";
    ?>
    <div class="main-Container" style="display: flex; justify-content:center; align-items:center; min-height:100vh; ">
        <div style="padding: 50px; border: 1px solid red; border-radius: 10px; width: 40%; max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 10px;">
            <a class="nav-link" href="piercing_upload.php">
                <center><h2> Upload in PIERCING</h2></center>
            </a>
        </div>

        <div style="padding: 50px; border: 1px solid red; border-radius: 10px; width: 40%; max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 10px;">
            <a class="nav-link" href="tattoo_upload.php">
                <center><h2>Upload in TATTOO</h2></center>
            </a>
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