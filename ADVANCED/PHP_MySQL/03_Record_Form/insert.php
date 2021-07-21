<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL - INSERT </title>
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

    try {
        $pdo = new PDO("mysql:host=localhost", "root", "0000");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }

    try {
        // Create prepared statement
        $sql_usage = "USE demo_DB";
        $sql = "INSERT IGNORE INTO persons (first_name, last_name, email) 
                        VALUES (:first_name, :last_name, :email)";
        $stmt = $pdo->prepare($sql);

        // Bind paras to statement
        $stmt->bindParam(':first_name', $_REQUEST['first_name']);
        $stmt->bindParam(':last_name', $_REQUEST['last_name']);
        $stmt->bindParam(':email', $_REQUEST['email']);

        // use the table
        $pdo->exec($sql_usage);
        //execute the prep stmt
        $stmt->execute();
        echo "Records inserted successfully";
    } catch (PDOException $e) {
        die("ERROR: " . $sql . $e->getMessage());
    }
    unset($pdo);

    ?>
</body>

</html>