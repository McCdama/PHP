<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - Time </title>
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
    $today = date("d/m/y");
    echo $today;
    echo date("d-m-Y") . '<br>';
    echo date("d.m.Y") . '<br>';
    echo date("h:i:s") . "<br>";
    echo date("F d, Y h:i:s A") . "<br>";
    echo date("h:i a");
    echo '<hr>';
    ?>

    <?php
    $timestamp = time();
    // not human-readable
    echo ($timestamp);
    echo '<br>';
    // human
    echo date("F d, Y h:i:s", $timestamp);
    echo '<hr>';
    ?>

    <?php
    // create a timestamp based on a specific date and time
    // mktime(hour, minute, second, month, day, year)

    echo mktime(20, 29, 00, 06, 25, 2021);
    echo '<hr>';

    // Omiting all the arguments, the mktime() will return the UNIX timestamp corresponding to the current date and time, just like time().
    ?>

    <?php
    //find the weekday name corresponding to a particular date
    echo date('l', mktime(0, 0, 0, 06, 25, 2021));
    echo "<br>";
    //find a particular date in future after a specific time period
    // executed at 06, 2021
    $futureDate = mktime(0, 0, 0, date("m") + 30, date("d"), date("Y"));
    echo date("d/m/Y", $futureDate);
    echo "<br>";
    ?>
    <!-- See also ref: https://www.w3schools.com/Php/php_ref_date.asp -->
</body>

</html>