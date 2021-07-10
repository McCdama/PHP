<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - Session </title>
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
    #start up the session
    session_start();
    #echo session_status();
    #storing session data
    $_SESSION['firstname'] = "Mohed";
    $_SESSION['lastname'] = "Alrahbi";

    echo "Hi, " . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
    echo "<hr>";
    echo "<hr>";

    #Destroying a Session

    if (isset($_SESSION['lastname'])) {
        unset($_SESSION['lastname']);
    }
    echo $_SESSION['firstname'];
    #echo $_SESSION['lastname']; // --> undefined
    echo "<hr>";
    echo "<hr>";

    #Completely destroying
    session_destroy();
    echo "Hi ";
    echo $_SESSION['firstname']; // not destroyed!!
    #echo $_SESSION['lastname']; // --> undefined
    echo "<hr>";

    ?>

</body>

</html>