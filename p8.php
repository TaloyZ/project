<!DOCTYPE html>
<html>
<head>
    <title>User-defined Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>User-defined Functions</center></h1>
        <div class="box">
            <h2>Problem Statement</h2>
            <p>I will perform basic arithmetic operations and calculate the area and perimeter of a rectangle using user-defined functions.</p>

            <?php
            // Function to add two numbers
            function add($a, $b) {
                return $a + $b;
            }

            // Function to subtract two numbers
            function subtract($a, $b) {
                return $a - $b;
            }

            // Function to multiply two numbers
            function multiply($a, $b) {
                return $a * $b;
            }

            // Function to divide two numbers
            function divide($a, $b) {
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Division by zero error!";
                }
            }

            // Function to calculate the area of a rectangle
            function area($length, $width) {
                return $length * $width;
            }

            // Function to calculate the perimeter of a rectangle
            function perimeter($length, $width) {
                return 2 * ($length + $width);
            }

            // Function to find the maximum of three numbers
            function maxOfThree($a, $b, $c) {
                return max($a, max($b, $c));
            }

            // Function to find the minimum of three numbers
            function minOfThree($a, $b, $c) {
                return min($a, min($b, $c));
            }

            // Function to calculate the average of three numbers
            function average($a, $b, $c) {
                return ($a + $b + $c) / 3;
            }

            // Function to check if a number is even
            function isEven($num) {
                return $num % 2 == 0;
            }

            // Example values
            $num1 = 10;
            $num2 = 5;
            $length = 4;
            $width = 6;

            // Display results
            echo "<h2>Arithmetic Operations</h2>";
            echo "<p>Addition: $num1 + $num2 = " . add($num1, $num2) . "</p>";
            echo "<p>Subtraction: $num1 - $num2 = " . subtract($num1, $num2) . "</p>";
            echo "<p>Multiplication: $num1 * $num2 = " . multiply($num1, $num2) . "</p>";
            echo "<p>Division: $num1 / $num2 = " . divide($num1, $num2) . "</p>";

            echo "<h2>Rectangle Calculations</h2>";
            echo "<p>Area of rectangle (length: $length, width: $width) = " . area($length, $width) . "</p>";
            echo "<p>Perimeter of rectangle (length: $length, width: $width) = " . perimeter($length, $width) . "</p>";

            // Additional function examples
            echo "<h2>Additional Functions</h2>";
            echo "<p>Maximum of 10, 5, 15: " . maxOfThree(10, 5, 15) . "</p>";
            echo "<p>Minimum of 10, 5, 15: " . minOfThree(10, 5, 15) . "</p>";
            echo "<p>Average of 10, 5, 15: " . average(10, 5, 15) . "</p>";
            echo "<p>Is 10 even? " . (isEven(10) ? "Yes" : "No") . "</p>";
            echo "<p>Is 7 even? " . (isEven(7) ? "Yes" : "No") . "</p>";
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 25, 2024</center>
</body>
</html>