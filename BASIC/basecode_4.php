<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-4</title>
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
    <!-- LOOPING: -->
    <?php
    #while
    $i = 0;
    while ($i <= 3) {
        $i++;
        echo "The number is: " . $i . '<br>';
    }
    echo '<hr>';
    ?>


    <?php
    # do..while
    $ii = 0;

    do {
        $ii++;
        echo "The number is: " . $ii . '<br>';
    } while ($ii <= 10);
    echo '<hr>';
    ?>

    <?php
    #for
    for ($i = 0; $i <= 7; $i++) {
        echo "The Number is: " . $i . '<br>';
    }
    echo '<hr>';
    ?>


    <?php
    # foreach is used to iterate over an array :)

    $colorsArray = array('RED', "BLUE", "SMOOKY");
    foreach ($colorsArray as $value) {
        echo $value . "<br>";
    }
    echo '<hr>';

    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
    foreach ($age as $key => $value) {
        echo "The KEY is: " . $key . "<br>";
        echo "The VALUE is: " . $value . "<br>";
    }
    echo '<hr>';
    ?>


    <?php
    #Functions:

    function whatIsToday()
    {
        echo "Today is " . date('l jS \of F Y h:i:s A', mktime());
    }
    //calling
    whatIsToday();
    echo '<hr>';

    function getSum($sum1, $sum2)
    {
        $sum = $sum1 + $sum2;
        echo "Sum of the two numbers $sum1 and $sum2 is : $sum";
    }
    getSum(22, 40); # this function has no return -- the messege will be printed from the echo method above
    # note.. even if we type an echo before the methode call , it prints nothing, because it has no return.. see below. 
    echo '<hr>';
    ?>


    <?php
    #Default Values - optional 
    function customFont($font, $size = 2.5)
    {
        echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello Ajassem</p>";
    }

    customFont("Arial", 1.5);
    echo '<hr>';
    customFont("Times", 2);
    echo '<hr>';
    customFont("Monospace");
    echo '<hr>';

    ?>

    <?php
    # Returning a value from a function:
    function getSumi($num1, $num2)
    {
        $total = $num1 + $num2;
        return $total;
    }
    echo getSumi(5, 10); # The ecgho here did the Job , because we have a return in the function
    echo '<hr>';
    ?>


    <?php
    # a function can not retutn mutliple values!!! Howeverm we can obtain similar result by returning an ARRAY.
    function divideNumbers($dividend, $divisor)
    {
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;
    }

    # Assign variables as if they were an array .. see https://www.php.net/manual/en/function.list.php
    list($dividend, $divisor, $quotient) = divideNumbers(10, 2);

    echo $dividend;
    echo '<br>';
    echo $divisor;
    echo '<br>';
    echo $quotient;
    echo '<hr>';

    ?>



    <?php
    # passing arg to a func by Ref #### prepending an ampersand (&)
    function selfMultiply(&$number)
    {
        $number *= $number;
        return $number;
    }
    $mynum = 5;
    echo $mynum;
    echo '<br>';

    selfMultiply($mynum);
    echo $mynum;
    echo '<hr>';

    ?>




    <?php
    # variable scope:
    function test()
    {
        $greet = "Hello Jassem";
        echo $greet;
    }

    test();
    echo '<br>';
    #echo $greet; // Generate undefined variable error
    echo '<hr>';
    $greet1 = "HEY DELILAH";

    function test1()
    {
        // echo $greet1; ####  Generate undefined variable error ### 
    }

    test1(); //  ####  Generate undefined variable error ### 
    echo $greet1;
    echo '<hr>';
    ?>

    <?php
    # GLOBAL:

    $greetglobal = "HEY";

    function test2()
    {
        global $greetglobal;
        echo $greetglobal;
    }
    echo 'This is the global var from the function: ';
    test2();
    echo '<br>' . 'echo the var: ';
    echo $greetglobal;
    echo '<hr>';

    // Assign a new value to variable
    $greetglobal = "CHAOOO ";
    echo 'We have assigned a new value... ' . '<br>';
    echo 'This is the global var from the function: ';
    test2();
    echo '<br>' . 'echo the var: ';
    echo $greetglobal;


    ?>

    <?php










    ?>
</body>

</html>