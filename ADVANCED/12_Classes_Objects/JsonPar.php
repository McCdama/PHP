<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP - JSON </title>
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
    # json_encode() || json_decode()

    # Encode a value to JSON format
    # e.g: encode a PHP associative array into a JSON object:
    // An associative array
    $marks = array("Mohed" => 26, "Ebru" => 25, "Hassan" => 28, "Dad" => 55);
    echo json_encode($marks);
    echo "<hr>";

    # e.g: encode the PHP indexed array into a JSON array,
    // An indexed array
    $colors = array("Red", "Green", "Blue", "Orange", "Yellow");
    echo json_encode($colors);
    echo "<hr>";

    #  to return an PHP indexed array as JSON object, we can use enforce  ##
    // An indexed array
    $colors = array("Red", "Green", "Blue", "Orange");
    echo json_encode($colors, JSON_FORCE_OBJECT);
    echo "<hr>";
    ?>





    <?php
    # json_encode() || json_decode()

    # Decode  a JSON object to PHP object.

    // Store JSON data in a PHP variable
    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    var_dump(json_decode($json));
    echo "<hr>";

    ### Specify a second parameter $assoc which accepts a boolean value 
    ## that when set as true JSON objects are decoded into associative arrays.
    ## It is false by default.  ###
    // Store JSON data in a PHP variable
    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

    var_dump(json_decode($json, true));
    echo "<hr>";


    ## Decode the JSON data and access individual elements of the JSON object or array
    // Assign JSON encoded string to a PHP variable
    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

    // Decode JSON data to PHP associative array
    $arr = json_decode($json, true);
    // Access values from the associative array
    echo $arr["Peter"];  // Output: 65
    echo "<br>";
    echo $arr["Harry"];  // Output: 80
    echo "<br>";
    echo $arr["John"];   // Output: 78
    echo "<br>";
    echo $arr["Clark"];  // Output: 90
    echo "<br>";
    echo "<br>";

    // Decode JSON data to PHP object
    $obj = json_decode($json);
    // Access values from the returned object
    echo $obj->Peter;   // Output: 65
    echo "<br>";
    echo $obj->Harry;   // Output: 80
    echo "<br>";
    echo $obj->John;    // Output: 78
    echo "<br>";
    echo $obj->Clark;   // Output: 90
    echo "<hr>";
    echo "<hr>";


    # LOOP:
    # Assign JSON encoded string to a PHP variable
    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

    // Decode JSON data to PHP associative array
    $arr = json_decode($json, true);

    // Loop through the associative array
    foreach ($arr as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    echo "<hr>";
    // Decode JSON data to PHP object
    $obj = json_decode($json);

    // Loop through the object
    foreach ($obj as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    echo "<hr>";

    ?>

    <?php
    # Extracting Values from Nested JSON Data
    // Define recursive function to extract nested values
    function printValues($arr)
    {
        global $count;
        global $values;

        // Check input is an array
        if (!is_array($arr)) {
            die("ERROR: Input is not an array");
        }

        /*
    Loop through array, if value is itself an array recursively call the
    function else add the value found to the output items array,
    and increment counter by 1 for each value found
    */
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                printValues($value);
            } else {
                $values[] = $value;
                $count++;
            }
        }

        // Return total count and values found in array
        return array('total' => $count, 'values' => $values);
    }

    // Assign JSON encoded string to a PHP variable
    $json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';
    // Decode JSON data into PHP associative array format
    $arr = json_decode($json, true);

    // Call the function and print all the values
    $result = printValues($arr);
    echo "<h3>" . $result["total"] . " value(s) found: </h3>";
    echo implode("<br>", $result["values"]);

    echo "<hr>";

    // Print a single value
    echo $arr["book"]["author"] . "<br>";  // Output: J. K. Rowling
    echo $arr["book"]["characters"][0] . "<br>";  // Output: Harry Potter
    echo $arr["book"]["price"]["hardcover"];  // Output: $20.32
    ?>



</body>

</html>