<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-3</title>
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

    $d = date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend";
    } else {
        echo "nice day";
    }
    echo "<hr>";
    ?>


    <?php

    $d = date("D");
    #echo $d;
    if ($d == "Fri") {
        echo "Have a nice weekend";
    } elseif ($d == "Sun") {
        echo "Have a nice sunday";
    } else {
        echo "nice day";
    }
    echo "<hr>";
    ?>



    <?php
    $age = 26;
    echo ($age < 18) ? 'Child' : 'Adult';
    echo "<hr>";
    ?>




    <?php

    $today = date("D");
    switch ($today) {
        case 'Mon':
            echo "Today is Monday. Clean your house.";
            break;
        case 'Tue':
            echo "Today is Tuesaday. Buy some food.";
            break;
        case 'Wed':
            echo "Today is Wedensday.visit a doc.";
            break;
        case 'Thu':
            echo "Today is Thursady. repair the car.";
            break;
        case 'Fri':
            echo "Today is Friday. Pray tonight.";
            break;
        case 'Sat':
            echo "Today is Saturday. take a rest.";
            break;
        case 'Sun':
            echo "Today is Sunday. watch a movie.";
            break;
        default:
            echo "No Info. available for today";
            break;
    }
    echo "<hr>";
    ?>


    <?php

    #indexd Array: # the index is assigned automatically
    $indexedArrayOfColor = array("RED", "BLUE", "GREEN", "WHITE");
    var_dump($indexedArrayOfColor);
    echo "<hr>";

    # Equivalent: # the index is assigned manually
    $manuColor[0] = "RED";
    $manuColor[1] = "BLUE";
    $manuColor[2] = "GREEN";
    $manuColor[3] = "WHITE";
    $manuColor[4] = "OTHER";

    echo $manuColor[0] . "<br>";
    var_dump($manuColor[0]);
    echo "<br>";
    echo $manuColor[1] . "<br>";
    var_dump($manuColor[1]);
    echo "<br>";
    echo $manuColor[2] . "<br>";
    var_dump($manuColor[2]);
    echo "<br>";
    echo $manuColor[3] . "<br>";
    var_dump($manuColor[3]);
    echo "<br>";
    echo $manuColor[4] . "<br>";
    var_dump($manuColor[4]);
    echo "<hr>";
    ?>


    <?php
    # Associative Arrays: The key assigned to value can be arbitrary and USER defined strings
    # instead of the (automatically)/(manually) indexed Number

    $associativeArray = array('Mohed' => 26, 'Hassan' => 28, 'Ebru' => 26);
    var_dump($associativeArray);
    echo "<br>";
    #echo $associativeArray;// It does not work here!



    # Equivalent: # the index is assigned manually
    $associativeArray["Mohed"] = 26;
    $associativeArray["Hassan"] = 28;
    $associativeArray["Ebru"] = 26;


    echo $associativeArray["Mohed"] . "<br>";
    var_dump($associativeArray["Mohed"]);
    echo "<br>";
    echo $associativeArray["Hassan"] . "<br>";
    var_dump($associativeArray["Hassan"]);
    echo "<br>";
    echo $associativeArray["Ebru"] . "<br>";
    var_dump($associativeArray["Ebru"]);
    echo "<hr>";
    ?>



    <?php
    # Multidimensional Array:

    #Ascending Order:

    $multidimensionalContactArray = array(

        array('name' => "Mohed Alrahbi", 'email' => 'mccdama@gmail.com'),
        array('name' => "Hassan Alrahbi", 'email' => 'hassan@gmail.com'),
        array('name' => "Ebru Alrahbi", 'email' => 'ebru@gmail.com')

    );

    echo "Hassan email is: " . $multidimensionalContactArray[1]["email"] . '<hr>';
    print_r($multidimensionalContactArray);
    echo '<hr>';
    #echo $multidimensionalContactArray;
    var_dump($multidimensionalContactArray);
    echo '<hr>';

    ?>

    <?php
    #Sorting:

    # Indexed Array:
    echo "Unsorted indexed Array:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    sort($indexedArrayOfColor);
    echo "Sorted indexed Array:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';

    #Descending Order:
    echo "Unsorted indexed Array:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    rsort($indexedArrayOfColor);
    echo "Sorted indexed Array in Descending order:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    ?>

    <?php


    #Sorting:

    # Associative Array:
    # in Ascending Order By Value

    echo "Unsorted Associative Array:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    asort($indexedArrayOfColor);
    echo "Sorted associative Array in Ascending Order By Value :" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    echo '<hr>';
    echo '<hr>';

    #Descending Order By Value:
    echo "Unsorted associative Array:" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';
    asort($indexedArrayOfColor);
    echo "Sorted associative Array in Descending order By Value :" . '<br>';
    print_r($indexedArrayOfColor);
    echo '<hr>';


    # in Ascending Order By KEY

    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);

    // Sorting array by key and print
    ksort($age);
    print_r($age);
    echo '<hr>';




    # in Descending  Order By KEY
    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);

    // Sorting array by key and print
    krsort($age);
    print_r($age);









    ?>







































</body>

</html>