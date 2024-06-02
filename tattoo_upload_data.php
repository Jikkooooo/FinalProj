<?php
include 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data</title>
    <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
</head>

<body>
    <?php
    session_start();
    include "header.php";
    ?>
    <div style="padding-top: 10%; max-width: fit-content;
            margin-inline: auto;">
        <table border=1 cellspacing=0 cellpadding=10>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Image</td>
            </tr>
            <?php
            $i = 1;
            $rows = mysqli_query($dbConn, "SELECT * FROM tattoo_gallery ORDER BY t_id DESC")
            ?>

            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["t_name"]; ?></td>
                    <td> <img src="tattoo/piercing/<?php echo $row["t_img"]; ?>" width=200 title="<?php echo $row['t_img']; ?>"> </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="../uploadimagefile">Upload Image File</a>
    </div>
</body>

</html>