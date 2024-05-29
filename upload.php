<?php
include 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Piercing Uploads View</title>
</head>

<body>
    <?php
    session_start();
    include "navbar.php";
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
            $rows = mysqli_query($dbConn, "SELECT * FROM piercing_gallery ORDER BY p_id DESC")
            ?>

            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["p_name"]; ?></td>
                    <td> <img src="gallery/piercing/<?php echo $row["p_img"]; ?>" width=200 title="<?php echo $row['p_img']; ?>"> </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="../uploadimagefile">Upload Image File</a>
    </div>
</body>

</html>