<!DOCTYPE html>
<html>
<head>
    <title>Loop Statements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Loop Statements</center></h1>
        <div class="box">
            <?php
            // Declare whole number variables
            $n = 5; // You can change this value
            $m = 6; // You can change this value

            // Display n x m multiplication table using for loop
            echo "<h2>Multiplication Table of $n</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Multiplier</th><th>Result</th></tr>";
            for ($i = 1; $i <= $m; $i++) {
                $result = $n * $i;
                echo "<tr><td>$n x $i</td><td>$result</td></tr>";
            }
            echo "</table>";

            // Display n Fibonacci series using while loop
            echo "<h2>Fibonacci Series of $n</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            echo "<p>";
            while ($count < $n) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }
            echo "</p>";

            // Display m Fibonacci series using while loop
            echo "<h2>Fibonacci Series of $m</h2>";
            $a = 0;
            $b = 1;
            $count = 0;
            echo "<p>";
            while ($count < $m) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $count++;
            }
            echo "</p>";

            // Compute the factorial of n using do...while loop
            echo "<h2>Factorial of $n</h2>";
            $factorial = 1;
            $i = 1;
            do {
                $factorial *= $i;
                $i++;
            } while ($i <= $n);
            echo "<p>Factorial of $n is: $factorial</p>";

            // Compute the summation of m using do...while loop
            echo "<h2>Summation of $m</h2>";
            $sum = 0;
            $j = 1;
            do {
                $sum += $j;
                $j++;
            } while ($j <= $m);
            echo "<p>Summation of numbers from 1 to $m is: $sum</p>";
            ?>
            
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 25, 2024</center>
</body>
</html>