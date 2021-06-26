<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP </title>
    <link rel="icon" href="./../favicon.ico">
</head>
<style>
    body {
        font-family: 'Courier New', Courier, monospace;
        font-size: x-large;
        max-width: 500px;
        justify-content: center;
        text-align: center;
        margin: auto;
        background-color: #f5f5f5;
        color: #2F4F4F;
    }
</style>

<body>
    <?php
    #include and require allow to include the code contained in a PHP file within another PHP file

    include 'header.php';
    include 'menu.php';
    ?>


    <?php
    // Including file
    require_once "my_functions.php";
    // Calling the function
    multiplySelf(2); // Output: 4
    echo "<br>";

    // Including file once again
    require_once "my_functions.php";
    // Calling the function
    multiplySelf(5); // Output: 25
    ?>


</body>
<h1>Wlcome to the Web</h1>
<p>Here you have a lot of Info</p>
<?php include 'footer.php'; ?>

</html>