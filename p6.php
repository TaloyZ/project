<!DOCTYPE html>
<html>
<head>
    <title>Selection Statements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Selection Statements</center></h1>
        <div class="box">
            <h2>String Variables</h2>
            <?php
            // Initialize string variables
            $string1 = "Banana";
            $string2 = "Apple";
            $string3 = "Cherry";
            $string4 = "Mango";
            $string5 = "Grape";

            // Store strings in an array
            $strings = [$string1, $string2, $string3, $string4, $string5];

            // Sort strings in ascending order
            for ($i = 0; $i < count($strings); $i++) {
                for ($j = $i + 1; $j < count($strings); $j++) {
                    if ($strings[$i] > $strings[$j]) {
                        // Swap
                        $temp = $strings[$i];
                        $strings[$i] = $strings[$j];
                        $strings[$j] = $temp;
                    }
                }
            }

            echo "<h3>Strings in Ascending Order:</h3>";
            foreach ($strings as $string) {
                echo "<p>$string</p>";
            }

            // Sort strings in descending order
            for ($i = 0; $i < count($strings); $i++) {
                for ($j = $i + 1; $j < count($strings); $j++) {
                    if ($strings[$i] < $strings[$j]) {
                        // Swap
                        $temp = $strings[$i];
                        $strings[$i] = $strings[$j];
                        $strings[$j] = $temp;
                    }
                }
            }

            echo "<h3>Strings in Descending Order:</h3>";
            foreach ($strings as $string) {
                echo "<p>$string</p>";
            }
            ?>

            <h2>Integer Variables</h2>
            <?php
            // Initialize integer variables
            $int1 = 10;
            $int2 = 20;
            $int3 = 30;
            $int4 = 40;
            $int5 = 5;

            // Calculate sum, product, and average if the first number is divisible by the fifth number
            if ($int1 % $int5 == 0) {
                $sum = $int1 + $int2 + $int3 + $int4 + $int5;
                $product = $int1 * $int2 * $int3 * $int4 * $int5;
                $average = $sum / 5;

                echo "<h3>Sum: $sum</h3>";
                echo "<h3>Product: $product</h3>";
                echo "<h3>Average: $average</h3>";
            } else {
                // Display numbers in ascending order
                $ints = [$int1, $int2, $int3, $int4, $int5];

                // Sort integers in ascending order
                for ($i = 0; $i < count($ints); $i++) {
                    for ($j = $i + 1; $j < count($ints); $j++) {
                        if ($ints[$i] > $ints[$j]) {
                            // Swap
                            $temp = $ints[$i];
                            $ints[$i] = $ints[$j];
                            $ints[$j] = $temp;
                        }
                    }
                }

                echo "<h3>Numbers in Ascending Order:</h3>";
                foreach ($ints as $int) {
                    echo "<p>$int</p>";
                }
            }
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 24, 2024</center>
</body>
</html>