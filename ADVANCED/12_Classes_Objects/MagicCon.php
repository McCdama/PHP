<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Magic Constants </title>
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

    <!--
    Special predefined constants that change depending on where they are used.
    They begin with two underscores and end with two underscores.
    -->
    <?php
    echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 29
    echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 30
    echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 31
    echo "<hr>";
    ?>
    <?php
    // Displays the absolute path of this file
    echo "The full path of this file is: " . __FILE__;
    echo "<hr>";
    ?>
    <?php
    // Displays the directory of this file
    echo "The directory of this file is: " . __DIR__;
    echo "<hr>";
    ?>
    <?php
    class MyClass
    {
        public function getClassName()
        {
            return __CLASS__;
        }
    }
    $obj = new MyClass();
    echo $obj->getClassName(); // Displays: MyClass
    echo "<hr>";
    ?>

    <?php
    class Sample
    {
        public function myMethod()
        {
            echo __METHOD__;
        }
    }
    $obj = new Sample();
    $obj->myMethod(); // Displays: Sample::myMethod
    echo "<hr>";
    ?>





</body>

</html>