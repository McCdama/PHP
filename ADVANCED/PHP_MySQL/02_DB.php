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

    try {
        $pdo = new PDO("mysql:host=localhost", "root", "0000");
        // IMPORTANT :: Set the PDO error mode to exception//
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }

    try {
        $sql = "CREATE DATABASE if not exists demo_DB";
        $sql_use = "USE demo_DB";
        $sql_create = "CREATE TABLE if not exists persons(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE
        )";
        # Added IGNORE --> Avoiding Inserting Duplicate Records
        $sql_insert = "INSERT IGNORE INTO persons (first_name, last_name, email) 
                        VALUES ('MOHED', 'ALRAHBI', 'MCCDAMA@GMAIL.COM')";

        $sql_mul_rows = "INSERT INTO persons (first_name, last_name, email) 
                        VALUES('John', 'Rambo', 'johnrambo@mail.com'),
                                ('Clark', 'Kent', 'clarkkent@mail.com'),
                                ('John', 'Carter', 'johncarter@mail.com'),
                                ('Harry', 'Potter', 'harrypotter@mail.com')";

        $pdo->exec($sql);
        $pdo->exec($sql_use);
        $pdo->exec($sql_create);
        $pdo->exec($sql_insert);
        $pdo->exec($sql_mul_rows);

        echo "DB created successfully";
        echo "<br>";
        echo "TABLE created successfully";
        echo "<br>";
        echo "VALUES inserted successfully";
        echo "<br>";
        echo "Multiple rows inserted successfully";
        echo "<br>";
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
    unset($pdo);

    ?>
</body>

</html>