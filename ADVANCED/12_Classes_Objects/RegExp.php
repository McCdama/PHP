<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP - Regular Expressions </title>
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
    # [kf]	Matches any one of the characters k, f.
    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";
    /* preg_match()	Perform a regular expression match. */
    if (preg_match($pattern, $text)) {
        echo "Match found!";
        echo "<hr>";
    } else {
        echo "Match not found.";
        echo "<hr>";
    }
    ?>

    <?php
    $pattern = "/ca[kf]e/";
    $text = "He was eating cake in the cafe.";
    /* preg_match_all() Perform a global regular expression match. */
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";
    echo "<hr>";
    ?>

    <!--
    Predefined Character Classes:
        .   ||  Matches any single character except newline \n.
        \d	||  matches any digit character. Same as [0-9]
        \D	||  Matches any non-digit character. Same as [^0-9]
        \s	||  Matches any whitespace character (space, tab, newline or carriage return character). Same as [ \t\n\r]
        \S	||  Matches any non-whitespace character. Same as [^ \t\n\r]
        \w	||  Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as [a-zA-Z_0-9]
        \W	||  Matches any non-word character. Same as [^a-zA-Z_0-9]  
    -->

    <?php
    $pattern = "/\s/";
    $replacement = "-";
    $text = "Earth revolves around\nthe\tSun";
    // Replace spaces, newlines and tabs
    /* preg_replace()	Perform a regular expression search and replace. */
    echo preg_replace($pattern, $replacement, $text);
    echo "<br>";
    // Replace only spaces
    echo str_replace(" ", "-", $text);
    echo "<hr>";
    ?>

    <?php
    # Repetition Quantifiers
    /* 
        p+ 	   || Matches one or more occurrences of the letter p.
        p*	   || Matches zero or more occurrences of the letter p.
        p?	   || Matches zero or one occurrences of the letter p.
        p{2}   || Matches exactly two occurrences of the letter p.
        p{2,3} || Matches at least two occurrences of the letter p, but not more than three occurrences of the letter p.
        p{2,}  || Matches two or more occurrences of the letter p.
        p{,3}  || Matches at most three occurrences of the letter p
    
    */
    # e.g: will splits the string at comma, sequence of commas, whitespace, or combination
    $pattern = "/[\s,]+/";
    $text = "My favourite colors are red, green and blue";
    /* Splits up a string into substrings using a regular expression. */
    $parts = preg_split($pattern, $text);

    // Loop through parts array and display substrings
    foreach ($parts as $part) {
        echo $part . "<br>";
    }
    echo "<hr>";
    ?>

    <?php
    # Position Anchors:
    $pattern = "/^J/";
    $names = array("Jhon Carter", "Clark Kent", "John Rambo");
    /* Returns the elements of the input array that matched the pattern. */
    $matches = preg_grep($pattern, $names);

    // Loop through matches array and display matched names
    foreach ($matches as $match) {
        echo $match . "<br>";
    }
    echo "<hr>";



    $pattern = "/t$/";
    $names = array("Jhon Carter", "Clark Kent", "John Rambo");
    /* Returns the elements of the input array that matched the pattern. */
    $matches = preg_grep($pattern, $names);

    // Loop through matches array and display matched names
    foreach ($matches as $match) {
        echo $match . "<br>";
    }
    echo "<hr>";
    ?>


    <?php
    # Pattern Modifiers:
    /* 
        i || Makes the match case-insensitive manner.
        m || Changes the behavior of ^ and $ to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.
        g || Perform a global match i.e. finds all occurrences.
        o || Evaluates the expression only once.
        s || Changes the behavior of . (dot) to match all characters, including newlines.
        x || Allows you to use whitespace and comments within a regular expression for clarity.    
    */

    $pattern = "/color/i";
    $text = "Color red is more visible than color blue in daylight.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";
    echo "<hr>";


    $pattern = "/^color/im";
    $text = "Color red is more visible than \ncolor blue in daylight.";
    $matches = preg_match_all($pattern, $text, $array);
    echo $matches . " matches were found.";
    echo "<hr>";
    ?>


    <?php
    # Word Boundaries:
    $pattern = '/\bcar\w*/';
    $replacement = '<b>$0</b>';
    $text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
    echo preg_replace($pattern, $replacement, $text);
    ?>
</body>

</html>