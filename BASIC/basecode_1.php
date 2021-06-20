<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <link rel="icon" href="./favicon.ico">
</head>
<style>
    body {
        font-family: 'Courier New', Courier, monospace;
        font-size: xx-large;
        max-width: 500px;
        justify-content: center;
        text-align: center;
        margin: auto;

    }
</style>

<body>
    <?php
    $my_string = '世界';
    echo "$my_string";
    echo "<br>";
    echo "Hello, $my_string!<br>"; // Displays: Hello World!
    echo 'Hello, $my_string!<br>'; // Displays: Hello, $my_str!
    ?>


    <?php
    echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
    echo '<pre>Hello\tWorld!</pre>';   // Displays: Hello\tWorld!
    echo 'I\'ll be back';            // Displays: I'll be back
    echo "<hr>";
    ?>

    <?php
    #  calc. number of characters inside a string
    $my_calc_str = 'Welcome to my PHP webpage! ';
    echo strlen($my_calc_str); // Outputs: 27
    echo "<hr>";
    ?>


    <?php
    # counts the number of words in a string.
    $my_calc_str1 = 'The quick brown fox jumps over the lazy dog.';
    echo str_word_count($my_calc_str1); // Outputs: 9
    echo "<hr>";
    ?>

    <?php
    #replacing text within string
    $my_replace = 'If the facts do not fit the theory, change the facts.';

    // Display replaced string
    echo "<u>Orginal</u>: " . $my_replace . "<br>";
    echo "<i>after change: </i> " . str_replace("the ", " a ", $my_replace, $countofrep) . "<strong> $countofrep </strong>" . '<br>';
    //reversing a str
    echo strrev($my_calc_str);

    ?>

</body>

</html>