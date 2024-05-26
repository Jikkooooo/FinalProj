<?php
include "db_conn.php" ?>
<!--navbar with bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <!-- Dropdown content -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="gallery.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALLERY </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="tattoo.php">TATTOO</a>
                        <a class="dropdown-item" href="piercing.php">PIERCING</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">SHOP</a>
                </li>
                <li class="nav-item">
                    <a href="index.php"><img src="image/toxzlogo.png" width="70px"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQ</a>
                </li>
                <?php if (isset($_SESSION['fname'/*=='admin'*/])) {  ?>
                    <li class="nav-item dropdown">
                <?php if (isset($_SESSION['fname']))
                        echo "<a href='profile.php' class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>". $_SESSION['fname']," ". $_SESSION['lname']."</a>"; ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Sign Out</a>
                    </div>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link"> Login/Sign Up </a>
                    </li>
                <?php } ?>
                


            </ul>
        </div>
    </div>
</nav>