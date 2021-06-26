<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - Download </title>
    <link rel="icon" href="./../favicon.ico">
</head>
<style>
    .img-box {
        display: inline-block;
        text-align: center;
        margin: 0 15px;
    }
</style>

<body>
    <?php

    # forcing Download 
    $images = array("McCdama.jpg");
    // loop through the array and create image gallery

    foreach ($images as $image) {
        echo '<div class="img-box">';
        echo '<img src="images/' . $image . '" widht="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '">';
        echo '<p> <a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
        echo '</div>';
    }

    ?>

</body>

</html>