<?php

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    require_once "config.php";

    $sql = "DELETE FROM employees WHERE id = :id";

    if ($stmt = $pdo->prepare($sql)) {


        $stmt->bindParam(":id", $param_id);

        $param_id = trim($_POST["id"]);

        if ($stmt->execute()) {
            // deleted with success
            header("location: index.php");
            exit();
        } else {
            echo "Oops, sth went wrong";
        }
    }
    unset($stmt);
    unset($pdo);
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
        // URL does not exist
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
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
                    <h2 class="mt-5">Delete Record</h2>

                    <form action="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>" method="post">

                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />

                            <p>Are you sure you want to delete this employee record?</p>

                            <input type="submit" class="btn btn-danger" value="Yes">
                            <a href="index.php" class="btn btn-secondary ml-2">No</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>