<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - File System </title>
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
    #fopen(filename, mode)

    # r	Open the file for reading only.
    # r+ open the file for reading and writing.
    # w	 Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.
    # w+ Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
    # a	Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
    # a+ Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
    # x	  Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
    # x+	Open the file for reading and writing; otherwise it has the same behavior as 'x'.

    //$handle = fopen("data.txt", "w")
    $handle = fopen("data.txt", "r");
    echo $handle;
    echo "<br>";
    ?>

    <?php
    $file = "dataXX.txt";
    if (file_exists($file)) {
        $handleIt = fopen($file, "r");
        // type the code here to excute.
    } else {
        echo "Error: File does not exist";
    }
    ?>

    <?php
    #good practice to close a file after performing all the operations.
    $file = "data.txt";
    if (file_exists($file)) {
        $hando = fopen($file, "r") or die("Error: Can not open the file");
        // some code to excute

        //closing the FILE HANDLE
        fclose($hando);
    } else {
        echo "File does not exist! ";
    }
    ?>

    <?php
    # read a specifed number of characters from a file.
    # fread(file handle, length in bytes)
    $file = "data1.txt";
    if (file_exists($file)) {
        $handy = fopen($file, "r") or die("Error");

        $content = fread($handy, "20");
        echo "<br>";

        fclose($handy);
        echo $content;
        echo "<hr>";
    } else {
        echo "ERROR";
    }

    ?>

    <?php
    # read the entire contents of file at once
    # fread(file handle, length in bytes)
    $file = "data1.txt";
    if (file_exists($file)) {
        $handy = fopen($file, "r") or die("Error");
        $content = fread($handy, filesize($file));
        echo $content;
        echo "<hr>";
        echo "<hr>";
    } else {
        echo "ERROR";
    }

    ?>

    <?php
    # read the entire file.
    $file = "data1.txt";
    if (file_exists($file)) {
        # Or much easier without needing to handle (open) the file.
        readfile($file) or die("Error");
        fclose($handy);
        echo "<hr>";
    } else {
        echo "ERROR";
    }

    ?>
    <?php
    # read the entire file.
    $file = "data1.txt";
    if (file_exists($file)) {
        # or with file_get_contents()
        $coni = file_get_contents($file) or die("Error");
        echo $coni;
        echo "<hr>";
    } else {
        echo "ERROR";
    }

    ?>


    <?php
    #writing
    # fwrite(file handle, string)
    $file_f = "note.txt";

    // string to be written
    $dati = "Ajassem ALrahbi";

    $hani = fopen($file_f, "w") or die("Error");

    fwrite($hani, $dati) or die("can not write");

    fclose($hani);
    echo "Data written to the file successfully.";
    echo "<hr>"
    ?>

    <?php


    $fifi = "noty.txt";
    $didi = "The quick Ajassem jump over";
    //preserve the file's contents you can pass the special FILE_APPEND flag as a third parameter.
    file_put_contents($fifi, $didi, FILE_APPEND) or die("Error");

    echo "Data written";
    echo "<hr>"

    ?>



    <?php

    #Renaming;
    $file_rename = "file_file.txt";
    if (file_exists($file_rename)) {
        if (rename($file_rename, "newFile.txt")) {
            echo "Renamed!";
        } else {
            echo "Error, file can not be renamed! ";
        }
    } else {
        echo "does not exist!";
        echo "<hr>";
    }

    ?>



    <?php
    #removing

    $file_remo = "note_remove.txt";

    if (file_exists($file_remo)) {
        if (unlink($file_remo)) {
            echo "removed successfully";
        } else {
            echo "can not be removed!";
        }
    } else {
        echo "not existing";
    }






    ?>






















</html>