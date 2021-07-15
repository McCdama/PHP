<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Classes & Objects </title>
    <style type="text/css">
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
</head>

<body>
    <?php

    // Include class definition
    require "Rectangle.php";

    // Create a new object from Rectangle class
    $obj = new Rectangle;

    // Get the object properties values
    echo $obj->length; // 0utput: 0
    echo $obj->width; // 0utput: 0

    // Set object properties values
    $obj->length = 30;
    $obj->width = 20;

    // Read the object properties values again to show the change
    echo $obj->length; // 0utput: 30
    echo $obj->width; // 0utput: 20


    // Call the object methods
    echo $obj->getPerimeter(); // 0utput: 100
    echo $obj->getArea(); // Output: 600
    ?>

</body>

</html>