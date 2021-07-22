<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL - Deleting Database Table Data </title>
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
    # Deleting Database Table Data
    # to change or modify the existing records in a database table
    # It is typically used in conjugation with the WHERE clause to delete only those records that matches specific criteria or condition.

    # DELETE FROM table_name WHERE column_name=some_value

    // Attempt MySQL server connection.
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=demo_DB", "root", "0000");
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }

    // Attempt update query execution
    try {
        $sql = "DELETE FROM persons WHERE id=21";
        $count = $pdo->exec($sql);

        /* Return number of rows that were deleted || IMPORTANT */
        print("Deleted $count rows.\n");
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    // Close connection
    unset($pdo);
    ?>
</body>

</html>