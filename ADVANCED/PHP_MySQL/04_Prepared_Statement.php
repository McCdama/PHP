<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL - Prepared Statement </title>
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
    # anonymous positional placeholder ? 
    ## INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?);
    # the named placeholders :----
    ## INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email);



    try {
        $pdo = new PDO("mysql:host=localhost", "root", "0000");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }


    try {
        // Create prepared statement

        $sql_usage = "USE demo_DB";
        // Prepare an insert statement
        $sql = "INSERT IGNORE INTO persons (first_name, last_name, email) 
                        VALUES (:first_name, :last_name, :email)";
        $stmt = $pdo->prepare($sql);

        // Bind paras to statement



        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        /* Set the parameters values and execute the statement again to insert another row */
        $first_name = "Hermione";
        $last_name = "Granger";
        $email = "hermionegranger@mail.com";
        $pdo->exec($sql_usage);
        $stmt->execute();

        /* Set the parameters values and execute the statement again to insert another row */
        $first_name = "Ron";
        $last_name = "Weasley";
        $email = "ronweasley@mail.com";
        $pdo->exec($sql_usage);
        $stmt->execute();

        $stmt->bindParam(':first_name', $_REQUEST['first_name'], PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $_REQUEST['last_name'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
        $pdo->exec($sql_usage);
        $stmt->execute();

        echo "Records inserted successfully";
    } catch (PDOException $e) {
        die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
    }
    // Close statement
    unset($stmt);
    // Close connection
    unset($pdo);


    ?>

</body>

</html>