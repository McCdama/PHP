<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL - Inserted ID </title>
    <link rel="icon" href="./../../favicon.ico">
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
    /* Attempt MySQL server connection.*/
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=demo_DB", "root", "0000");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    // Attempt insert query execution
    try {
        $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('AJASSEM', 'RAH', 'mohed@mail.com')";
        $pdo->exec($sql);
        $last_id = $pdo->lastInsertId();
        echo "Records inserted successfully. Last inserted ID is: " . $last_id;
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    // Close connection
    unset($pdo);
    ?>
</body>

</html>