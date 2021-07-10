<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error-Handling</title>
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
    #Error Levels: https://www.tutorialrepublic.com/php-reference/php-error-levels.php
    ?>
    <?php
    # using die() func.
    echo "Error Messege: ";
    $file  = fopen("sample.txt", "r");
    echo "<hr>";
    echo "<hr>";

    ?>

    <?php
    if (file_exists("sample.txt")) {
        $file  = fopen("sample.txt", "r");
    } else {
        # Simply display the custom error message and TERMINATE the current script.
        die("ERROR: The file you are trying to access does not exist. ");
    }
    echo "<hr>";
    ?>


    <?php
    # Custom Error handling, at least two parameters (errno and errstr)
    # Optional are :  (errfile, errline, and errcontext),

    function customError($errno, $errstr)
    {
        echo "<b>ERROR: </b> [$errno] $errstr";
    }

    # Tell the PHP to use the custom error handler function
    set_error_handler("customError");

    # Trigger Error
    echo ($test);
    ?>


</body>

</html>