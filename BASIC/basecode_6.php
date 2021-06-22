<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-6</title>
    <link rel="icon" href="./favicon.ico">
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
    <form method="GET" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <label for="inputName">Name: </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">

    </form>
    <hr>
    <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <label for="inputName">Name: </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">

    </form>
    <hr>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <label for="inputName">Name: </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">

    </form>

    <!-- GET and POST -->
    <!-- always available in all scopes throughout a script. -->
    <?php
    # -- GET --
    # HTTP methods: pass info(data) differently via URL para as a string of name and value PAIRS spreated be ampersands &
    # e.g. http://www.mccdama.fr/action.php?name=mohed&age=26 ==>>> name and age are the value of the GET para

    # superglobal variable $_GET to access all info sent through the URL or submitted through an HTML form using method="get" 

    if (isset($_GET["name"])) {
        echo "<p>Hi, " . $_GET["name"] . "</p>";
    }
    echo "<hr>";

    ?>


    <?php
    # ++ POST ++
    #more secure / long
    #   # superglobal variable $_POST to access all info sent through the URL or submitted through an HTML form using method="post" 
    if (isset($_POST["name"])) {
        echo "<p>Hi, " . $_POST["name"] . "</p>";
    }
    echo "<hr>";

    ?>


    <?php
    # // REQUEST //
    # contains value of both GET and POST  + COOKIE
    if (isset($_REQUEST["name"])) {
        echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
    }

    ?>




</body>

</html>