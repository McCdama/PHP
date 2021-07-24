<?php
// Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '0000');
define('DB_NAME', 'demo_DB');

// Attempt to connect to MySQL database
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
try {
    if (isset($_REQUEST["term"])) {


        $sql = "SELECT * FROM countries WHERE name LIKE :term";
        $stmt = $pdo->prepare($sql);

        $term = $_REQUEST["term"] . '%';


        $stmt->bindParam(":term", $term);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {
                echo "<p>" . $row["NAME"] . "</p>";
            }
        } else {
            echo "No matches found! ";
        }
    } else {
    }
} catch (PDOException $e) {
    die("ERROR" . $sql . $e->getMessage());
}
unset($stmt);
unset($pdo);
