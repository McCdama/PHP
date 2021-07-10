<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Classes & Objects </title>
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
    <?php
    class Rectangle
    {
        // Declare  properties
        public $length = 0;
        public $width = 0;

        // Method to get the perimeter
        public function getPerimeter()
        {
            return (2 * ($this->length + $this->width));
        }

        // Method to get the area
        public function getArea()
        {
            return ($this->length * $this->width);
        }
    }
    ?>

</body>

</html>