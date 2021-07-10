<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Filter</title>
    <style type="text/css">
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
</head>

<body>
    <!-- Sanitize and validate user inputs. -->
    <?php
    #filter_var(variable, filter, options)

    $comment = "<h1>Hey there! How are you doing today?</h1>";
    $sanComment = filter_var($comment, FILTER_SANITIZE_STRING);
    echo $sanComment;
    echo "<hr>";
    ?>

    <?php

    $int = 20;
    if (filter_var($int, FILTER_VALIDATE_INT)) {
        echo "The <b>$int</b> is a valid Integer";
    } else {
        echo "The <b>$int</b> is NOT a valid Integer";
    }
    echo "<hr>";
    ?>


    <?php

    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT)) {
        echo "The <b>$int</b> is a valid Integer";
    } else {
        echo "The <b>$int</b> is NOT a valid Integer";
    }
    echo "<hr>";
    ?>

    <?php
    # explicitly test for the value 0,
    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)) {
        echo "The <b>$int</b> is a valid Integer";
    } else {
        echo "The <b>$int</b> is NOT a valid Integer";
    }
    echo "<hr>";
    ?>




    <?php
    # Validate IP Addresses
    $ip = "172.16.254.1";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "The <b>$ip</b> is a valid IP Address";
    } else {
        echo "The <b>$ip</b> is NOT a valid IP Address";
    }
    echo "<hr>";
    ?>

    <?php
    # Validate IP Addresses // IPV4 or IPV6 IP 
    $ip = "172.16.254.1";
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        echo "The <b>$ip</b> is a valid IPV6 Address";
    } else {
        echo "The <b>$ip</b> is NOT a valid IPV6 Address";
    }
    echo "<hr>";
    ?>

    <?php
    # Validate an e-mail address.
    $mail = "mccdama@gmail.com";

    // Remove all illegal characters from url - except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    $sanEmail = filter_var($mail, FILTER_SANITIZE_EMAIL);


    if ($mail == $sanEmail && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "The <b>$mail</b> is a valid email Address";
    } else {
        echo "The <b>$mail</b> is NOT a valid email Address";
    }
    echo "<hr>";
    ?>

    <?php
    # Validate URLs.
    $url = "https://mccdama.fr";

    // Remove all illegal characters from email - except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
    $sanUrl = filter_var($url, FILTER_SANITIZE_URL);


    if ($url == $sanUrl && filter_var($url, FILTER_VALIDATE_URL)) {
        echo "The <b>$url</b> is a valid URL";
    } else {
        echo "The <b>$url</b> is NOT a valid URL";
    }
    echo "<hr>";
    ?>



    <?php
    # Check whether a URL contains query string
    $url = "http://www.example.com?topic=filters";

    if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
        echo "The <b>$url</b> contains query string";
    } else {
        echo "The <b>$url</b> is NOT contain any query string";
    }
    /* https://www.tutorialrepublic.com/html-tutorial/html-url.php */
    echo "<hr>";
    ?>


    <?php
    # Validate Integers Within a Range
    $int = 101;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0, "max_range" => 100)))) {
        echo "The <b>$int</b> is within the range of 0 to 100";
    } else {
        echo "The <b>$int</b> is NOT within the range of 0 to 100";
    }

    echo "<hr>";
    ?>










</body>

</html>