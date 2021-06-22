<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-5</title>
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
        background-color: #f5f5f5;
        color: #2F4F4F;
    }
</style>

<body>
    <?php
    #Math:
    echo 7 + 3;
    echo "<br>";
    echo 7 - 2;
    echo "<br>";
    echo 7 * 3;
    echo "<br>";
    echo 7 / 2;
    echo "<br>";
    echo 7 % 3;
    echo "<hr>";

    echo 5 + 4 * 10;
    echo "<br>";
    echo (5 + 4) * 10;
    echo "<br>";
    echo 5 + 4 * 10 / 2;
    echo "<br>";
    echo (5 + 4) * (10 / 2);
    echo "<br>";
    echo 5 + 4 * (10 / 2);
    echo "<hr>";
    ?>

    <?php
    #Find the Absolute Value of a Number: #####see: https://www.php.net/manual/en/function.abs.php
    #if the given number is negative, the valued returned is positive.
    echo abs(5);
    echo "<br>";
    echo abs(-5);
    echo "<br>";
    echo abs(5.3);
    echo "<br>";
    echo abs(-5.3);
    echo "<hr>";

    ?>



    <?php
    # Round a Fractional Value Up or Down:
    // rounf fractions up: see https://www.php.net/manual/en/function.ceil.php

    echo ceil(4.2);
    echo "<br>";
    echo ceil(9.99);
    echo "<br>";
    echo ceil(-5.18);
    echo "<hr>";

    // round fraction down: see https://www.php.net/manual/en/function.floor.php

    echo floor(9.2);
    echo "<br>";
    echo floor(9.99);
    echo "<br>";
    echo floor(-5.15);
    echo "<hr>";

    ?>


    <?php
    #Square Root: see: https://www.php.net/manual/en/function.sqrt.php
    echo sqrt(9);
    echo "<br>";
    echo sqrt(25);
    echo "<br>";
    echo sqrt(10);
    echo "<br>";
    echo sqrt(-16);
    echo "<hr>";
    ?>

    <?php
    #https://www.php.net/manual/en/function.rand.php
    echo rand() . "<br>";
    echo rand() . "<br>";
    echo "<hr>";
    #between 1 and 10
    echo rand(1, 10) . "<br>";
    echo rand(1, 8) . "<br>";
    echo "<hr>";

    # Decimal to Binary and Vice Versa
    # https://www.php.net/manual/en/function.decbin
    # https://www.php.net/manual/en/function.bindec.php
    echo decbin(2) . "<br>";
    echo decbin(12) . "<br>";
    echo decbin(100) . "<br>";
    echo "<hr>";

    echo bindec(10) . "<br>";
    echo bindec(1100) . "<br>";
    echo bindec(1100100) . "<br>";
    echo "<hr>";
    # dechex
    # hexdec
    # decoct
    # octdec
    ?>

    <?php
    #### see: https://www.php.net/manual/en/function.base-convert.php
    // Convert decimal to binary
    echo base_convert('12', 10, 2);  // 0utputs: 1100
    echo "<br>";
    // Convert binary to decimal
    echo base_convert('1100', 2, 10);  // 0utputs: 12
    echo "<br>";
    echo "<br>";

    // Convert decimal to hexadecimal
    echo base_convert('10889592', 10, 16);  // 0utputs: a62978
    echo "<br>";
    // Convert hexadecimal to decimal
    echo base_convert('a62978', 16, 10);  // 0utputs: 10889592
    echo "<br>";
    echo "<br>";

    // Convert decimal to octal
    echo base_convert('82', 10, 8);  // 0utputs: 122
    echo "<br>";
    // Convert octal to decimal
    echo base_convert('122', 8, 10);  // 0utputs: 82
    echo "<br>";
    echo "<br>";

    // Convert hexadecimal to octal
    echo base_convert('c2c6a8', 16, 8);  // 0utputs: 60543250
    echo "<br>";
    // Convert octal to hexadecimal
    echo base_convert('60543250', 8, 16);  // 0utputs: c2c6a8
    echo "<br>";
    echo "<br>";

    // Convert octal to binary
    echo base_convert('42', 8, 2);  // 0utputs: 100010
    echo "<br>";
    // Convert binary to octal
    echo base_convert('100010', 2, 8);  // 0utputs: 42
    echo "<br>";
    echo "<br>";

    // Convert hexadecimal to binary
    echo base_convert('abc', 16, 2);  // 0utputs: 101010111100
    echo "<br>";
    // Convert binary to hexadecimal
    echo base_convert('101010111100', 2, 16);  // 0utputs: abc
    echo "<br>";


    ?>








</body>

</html>