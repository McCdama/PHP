<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP-MySQL - FORM </title>
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
    <form action="insert.php" method="POST">
        <p>
            <label for="firstname">First Name: </label>
            <input type="text" name="first_name" id="firstname">
        </p>

        <p>
            <label for="lastname">Last Name: </label>
            <input type="text" name="last_name" id="lastname">
        </p>
        <p>
            <label for="emailAddress">Email Address: </label>
            <input type="text" name="email" id="emailAddress">
        </p>

        <input type="submit" value="submit">
    </form>
</body>

</html>