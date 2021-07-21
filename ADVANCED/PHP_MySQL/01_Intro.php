<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL </title>
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
    <?php
    ### Connection ###: 
    # Procedural way:
    //$link = mysqli_connect("hostname", "username", "password", "database");

    # Object Oriented way:
    //$mysqli = new mysqli("hostname", "username", "password", "database");

    # PHP Data Objects (PDO) way:
    //$pdo = new PDO("mysql:host=hostname;dbname=database", "username", "password");


    try {
        $pdo = new PDO("mysql:host=localhost;dbname=sakila", "root", "0000");

        echo "Connect successfully " . "<br>";
        // Print host information
        echo "ATTR_CONNECTION_STATUS: " . $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS")) . "<br>";
        echo "ATTR_AUTOCOMMIT: " . $pdo->getAttribute(constant("PDO::ATTR_AUTOCOMMIT")) . "<br>";
        echo "ATTR_CASE: " . $pdo->getAttribute(constant("PDO::ATTR_CASE")) . "<br>";
        echo "ATTR_CLIENT_VERSION: " . $pdo->getAttribute(constant("PDO::ATTR_CLIENT_VERSION")) . "<br>";
        echo "ATTR_DRIVER_NAME: " . $pdo->getAttribute(constant("PDO::ATTR_DRIVER_NAME")) . "<br>";
        echo "ATTR_ERRMODE: " . $pdo->getAttribute(constant("PDO::ATTR_ERRMODE")) . "<br>";
        echo "ATTR_ORACLE_NULLS: " . $pdo->getAttribute(constant("PDO::ATTR_ORACLE_NULLS")) . "<br>";
        echo "ATTR_PERSISTENT: " . $pdo->getAttribute(constant("PDO::ATTR_PERSISTENT")) . "<br>";
        echo "ATTR_SERVER_INFO: " . $pdo->getAttribute(constant("PDO::ATTR_SERVER_INFO")) . "<br>";
        echo "ATTR_SERVER_VERSION: " . $pdo->getAttribute(constant("PDO::ATTR_SERVER_VERSION")) . "<br>";
        //  echo "ATTR_PREFETCH: " . $pdo->getAttribute(constant("PDO::ATTR_PREFETCH")) . "<br>";
        //echo "ATTR_TIMEOUT: " . $pdo->getAttribute(constant("PDO::ATTR_TIMEOUT")) . "<br>";
    } catch (PDOException $e) {
        die("ERROR: could not connect. " . $e->getMessage());
    }
    // close the connection
    unset($pdo);

    ?>
</body>

</html>