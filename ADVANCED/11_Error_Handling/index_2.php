<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error-Logging</title>
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
    # Logs details of the error to the log file
    function calcDivision($dividend, $divisor)
    {
        if ($divisor == 0) {
            # trigger an error from within the script
            trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING);
            return false;
        } else {
            return ($dividend / $divisor);
        }
    }
    function customError($errno, $errstr, $errfile, $errline, $errcontext)
    {
        $message = date("Y-m-d H:i:s - ");
        $message .= "Error: [" . $errno . "], " . "$errstr in $errfile on line $errline, ";
        $message .= "Variables:" . print_r($errcontext, true) . "\r\n";

        error_log($message, 3, "logs/app_errors.log");
        die("There was a problem, please try again.");
    }
    set_error_handler("customError");
    echo calcDivision(10, 0);
    echo "This will never be printed.";
    ?>


</body>

</html>