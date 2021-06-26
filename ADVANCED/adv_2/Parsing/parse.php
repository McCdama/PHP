<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Advanced PHP - File System </title>
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
    #process directories or folders
    #Creating a New Directory

    $dir = "testdir";

    if (!file_exists($dir)) {
        if (mkdir($dir)) {
            echo "Success";
        } else {
            echo "could not be created!";
        }
    } else {
        echo "Already there!";
    }
    echo "<hr>";


    ?>

    <?php
    #Copying Files from One Location to Another

    $file = "example.txt";
    // Destination:
    $newfile = "backup/example.txt";
    if (file_exists($file)) {
        if (copy($file, $newfile)) {
            echo "copied";
        } else {
            echo "Error with copying";
        }
    } else {
        echo "Does not exist";
    }
    echo "<hr>";
    ?>

    <?php
    #Listing All Files in a Directory with scandir()
    ####### This script will be helpful if we're working with deeply nested directory structure. ######## 
    function outputFiles($path)
    {
        // check
        if (file_exists($path) && is_dir($path)) {
            $result = scandir($path);

            // Filter out the current (.) and parent (..) directories
            $files = array_diff($result, array('.', '..'));

            if (count($files) > 0) {
                //loop through returend array
                foreach ($files as $file) {
                    if (is_file("$path/$file")) {
                        echo $file . "<br>";
                    } else if (is_dir("$path/$file")) {
                        # Recursively call the function if directories found
                        outputFiles("$path/$file");
                    } else {
                        echo "Error; No files found in the directory";
                    }
                }
            }
        } else {
            echo "The Directory does not exist";
        }
    }

    outputFiles("mydir");
    echo "<hr>";

    ?>


    <?php
    # Listing All Files of a Certain Type with glob() func

    # search the documents directory and list all the files with .text extension. It will not search the subdirectories.
    foreach (glob("documents/*.txt") as $file) {
        echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
    }
    echo "<hr>";
    ?>


    <?php
    # recursively list all files within a directory

    // Define a function to output files in a directory
    function outputFiles_2($path)
    {
        // Check directory exists or not
        if (file_exists($path) && is_dir($path)) {
            // Search the files in this directory
            $files = glob($path . "/*");
            if (count($files) > 0) {
                // Loop through retuned array
                foreach ($files as $file) {
                    if (is_file("$file")) {
                        // Display only filename
                        echo basename($file) . "<br>";
                    } else if (is_dir("$file")) {
                        // Recursively call the function if directories found
                        outputFiles_2("$file");
                    }
                }
            } else {
                echo "ERROR: No such file found in the directory.";
            }
        } else {
            echo "ERROR: The directory does not exist.";
        }
    }

    // Call the function
    outputFiles_2("mydir");


    ?>

</html>