<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-4</title>
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
    <!-- LOOPING: -->
    <?php
    #while
    $i = 0;
    while ($i <= 3) {
        $i++;
        echo "The number is: " . $i . '<br>';
    }
    echo '<hr>';
    ?>


    <?php
    # do..while
    $ii = 0;

    do {
        $ii++;
        echo "The number is: " . $ii . '<br>';
    } while ($ii <= 10);
    echo '<hr>';
    ?>

    <?php
    #for
    for ($i = 0; $i <= 7; $i++) {
        echo "The Number is: " . $i . '<br>';
    }
    echo '<hr>';
    ?>


    <?php
    # foreach is used to iterate over an array :)

    $colorsArray = array('RED', "BLUE", "SMOOKY");
    foreach ($colorsArray as $value) {
        echo $value . "<br>";
    }
    echo '<hr>';


    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
    foreach ($age as $key => $value) {
        echo "The KEY is: " . $key . "<br>";
        echo "The VALUE is: " . $value . "<br>";
    }
    echo '<hr>';

    ?>



</body>

</html>