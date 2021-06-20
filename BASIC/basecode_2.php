<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-2</title>
    <link rel="icon" href="./favicon.ico">
</head>
<style>
    body {
        font-family: 'Courier New', Courier, monospace;
        font-size: x-large;
        max-width: 500px;
        justify-content: center;
        text-align: center;
        margin: auto;

    }
</style>

<body>
    <?php

    $x = 10;
    $y = 4;

    echo ($x + $y) . '<br>';
    echo ($x - $y) . '<br>';
    echo ($x * $y) . '<br>';
    echo ($x / $y) . '<br>';
    echo ($x % $y) . '<br>' . '<hr>';

    $x = 50;
    echo $x += 30;
    echo '<hr>';

    ?>


    <?php

    $q = 25;
    $n = 35;
    $z = "25";


    var_dump($q == $z);
    echo '<br>';
    var_dump($q === $z); //equal but not the same type
    echo '<br>';


    var_dump($q != $n);
    echo '<br>';

    var_dump($q !== $z);
    echo '<br>';


    var_dump($q < $n);   // Outputs: boolean true
    echo '<br>';
    var_dump($q > $n);   // Outputs: boolean false
    echo '<br>';
    var_dump($q <= $n);  // Outputs: boolean true
    echo '<br>';
    var_dump($q >= $n);  // Outputs: boolean false
    echo '<hr>';

    #Incrementing and Decrementing Operators:
    # ++$x	Pre-increment:	Increments $x by one, then returns $x
    # $x++	Post-increment:	Returns $x, then increments $x by one


    $x = 10;
    echo ++$x . '<br>';
    echo $x . '<br>';

    $x = 10;
    echo $x++ . '<br>';
    echo $x;
    echo "<hr>";
    ?>
    <form method="POST" action="basecode_2.php">
        <input type="text" value="" name="leap_year" placeholder="enter a year" value="">
        <input type="submit" value="send" name="send">
    </form>
    <?php

    if (!isset($_POST['leap_year'])) {
        echo "not vaild yet!";
    } else {
        $var_year =  $_POST['leap_year'];
        if (($var_year % 400 == 0) || ($var_year % 100 !== 0) && ($var_year % 4 == 0)) {
            echo "$var_year is a leap year";
        } else {
            echo "$var_year is not a leap year!";
        }
    }
    echo "<hr>";
    $xx = array('a' => 'RED', 'b' => 'GREEN', 'c' => 'BLUE');
    $yy = array('u' => 'Yellow', "v" => "ORANGE", "q" => "PINK");
    $zz = $xx + $yy;
    var_dump($zz);
    echo "<br>";

    var_dump($xx === $yy);  // Outputs: boolean false not the same key-value pair
    echo "<br>";
    var_dump($xx == $yy);   // Outputs: boolean false not the same key-value pair &! in same order &! of the same type
    echo "<br>";
    var_dump($xx != $yy);   // Outputs: boolean true
    echo "<br>";
    var_dump($xx <> $yy);   // Outputs: boolean true
    echo "<br>";
    var_dump($xx !== $yy);  // Outputs: boolean true
    echo "<hr>";


    ?>

</body>

</html>