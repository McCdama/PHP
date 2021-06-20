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


    echo '<pre>Hello\tWorld!</pre>';   // Displays: Hello\tWorld!
    echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
    echo 'I\'ll be back';            // Displays: I'll be back



    ?>

</body>

</html>