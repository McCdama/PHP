<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> A Simple PHP File embedded within a HTML</title>
    <link rel="icon" href="./favicon.ico">
</head>

<body>
    <!-- PHP delimiter -->
    <h3 style="font-family: 'Courier New', Courier, monospace;"> <?php
                                                                    // Display greeting message
                                                                    echo "Hello, Ajassem";
                                                                    ?> </h3>


    <?php $color = "blue";
    echo "The color of the sky is " . $color . '<br></br>';
    #echo "The color of the sky is " . $Color . '<br></br>';
    #echo "The color of the sky is " . $COLOR . '<br></br>';
    // keywords, function and classes : case-insensitive
    echo gettype($color) . '<br>';
    echo GETTYPE($color) . "<br>";


    $txt = 'Hey there Delielah';
    $num = 947;
    $colors = array("Red", "Green", "Blue");

    echo $txt . '<br>';
    echo $num . '<br>';

    #Constant 
    define('SITE_URL', 'https://mccdama.fr');
    echo "Thx for visiting " . SITE_URL . '<hr>';

    ?>

    <?php
    # echo: Since echo is a language construct not actually a function (like if statement), you can use it without parentheses e.g. echo
    # print: display output to the browser

    echo "<h3 style='color: green;'>Heading with style</h3>";
    echo "$txt";
    echo "<br>";
    echo "$num";
    echo "<br>";
    echo $colors[1];
    echo "<hr>";

    ?>
    <?php
    print_r($txt);
    print '<br>';
    print "salut tout le monde!";
    print '<hr>';

    ?>


    <?php

    $a = 123;
    var_dump($a);
    echo "<br>";

    $b = -123;
    var_dump($b);
    echo "<br>";
    $c = 0x1A; // hexadecimal number
    var_dump($c);
    echo "<br>";

    $d = 0123; // octal number
    var_dump($d);
    echo "<br>";

    # single or double quotes are vaild for string
    $e = 'Hello world!';
    echo $e;
    echo "<br>";

    $f = "Hello world!";
    echo $f;
    echo "<br>";

    $g = 'Stay here, I\'ll be back.';
    echo $g;
    echo "<hr>";

    $a1 = 1.234;
    var_dump($a1);
    echo "<br>";

    $b1 = 10.2e3;
    var_dump($b1);
    echo "<br>";

    $c1 = 4E-10;
    var_dump($c1);
    echo "<hr>";

    $show_error = true;
    var_dump($show_error);
    echo "<hr>";

    ?>

    <?php

    $color_codes = array('Green' => '#00ff00', 'Blue' => '#0000ff', 'Red' => 'ff0000');
    var_dump($color_codes);
    echo '<br>';
    #echo $color_codes . '<br>';
    #print $color_codes . '<br>';
    print_r($color_codes) . '<br>';
    echo '<hr>';
    ?>









</body>

</html>