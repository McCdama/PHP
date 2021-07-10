<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - Email </title>
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
    # mail(to, subject, message, headers, parameters)
    #echo phpinfo();
    /* ini_set("SMTP", "ssl://smtp.gmail.com");
    ini_set("smtp_port", "465"); */
    $to = 'm7md.ra7abi@gmail.com';
    $subject = 'Info';
    $message = 'Hey there Delilah';
    $from = 'm7md.ra7abi@gmail.com';


    if (mail($to, $subject, $message)) {
        echo " Sent successfully";
    } else {
        echo "unable to send it";
    }

    ?>

</body>

</html>