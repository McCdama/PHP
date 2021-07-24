<?php

// Check exictence of id parameter before processing further
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    // Include config file
    require_once "config.php";

    // prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = :id";

    if ($stmt = $pdo->prepare($sql)) {
        // Bind
        $stmt->bindParam(":id", $param_id);
        // Set para
        $param_id = trim($_GET['id']);

        // Attempt to execute the prepared stmt
        if ($stmt->execute()) {
            if ($stmt->rowCount() == 1) {
                // Fetch result row as an associative array. Since the result set contains only one row, we don not need to use while loop.
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else {
                // URL does not contain vaild id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops, something went wrong";
        }
    }
    unset($stmt);
    unset($pdo);
} else {
    // URL does not contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">View Record</h2>

                    <div class="form-group">
                        <label>Name</label>
                        <p> <b><?php echo $row["name"]; ?></b> </p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p> <b><?php echo $row["address"]; ?></b> </p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p> <b><?php echo $row["salary"]; ?></b> </p>
                    </div>
                    <p>
                        <a href="index.php" class="btn btn-primary">Back</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>