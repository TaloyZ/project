<!DOCTYPE html>
<html>
<head>
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Two-dimensional Array</center></h1>
        <div class="box">
            <h2>Matrix Operations</h2>
            <?php
            // Define the size of the matrix
            $N = 4; // You can change this value for different sizes
            $matrix = [];
            $overallSum = 0;
            $overallMin = PHP_INT_MAX;
            $overallMax = PHP_INT_MIN;

            // Fill the NxN array with random integers
            for ($i = 0; $i < $N; $i++) {
                for ($j = 0; $j < $N; $j++) {
                    $matrix[$i][$j] = rand(1, 100); // Random integers between 1 and 100
                    $overallSum += $matrix[$i][$j];
                    $overallMin = min($overallMin, $matrix[$i][$j]);
                    $overallMax = max($overallMax, $matrix[$i][$j]);
                }
            }

            // Display the matrix
            echo "<h3>Matrix:</h3>";
            echo "<table border='1'>";
            for ($i = 0; $i < $N; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $N; $j++) {
                    echo "<td>{$matrix[$i][$j]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // Initialize arrays for sums, averages, min, and max
            $rowSums = $colSums = $rowMins = $colMins = $rowMaxs = $colMaxs = [];
            $diagonal1Sum = $diagonal2Sum = 0;

            // Calculate sums, averages, min, and max
            for ($i = 0; $i < $N; $i++) {
                $rowSums[$i] = $colSums[$i] = 0;
                $rowMins[$i] = PHP_INT_MAX;
                $rowMaxs[$i] = PHP_INT_MIN;
                $colMins[$i] = PHP_INT_MAX; // Initialize column mins
                $colMaxs[$i] = PHP_INT_MIN; // Initialize column maxs

                for ($j = 0; $j < $N; $j++) {
                    // Row calculations
                    $rowSums[$i] += $matrix[$i][$j];
                    $rowMins[$i] = min($rowMins[$i], $matrix[$i][$j]);
                    $rowMaxs[$i] = max($rowMaxs[$i], $matrix[$i][$j]);

                    // Column calculations
                    $colSums[$j] = $matrix[$i][$j];
                    $colMins[$j] = isset($colMins[$j]) ? min($colMins[$j], $matrix[$i][$j]) : $matrix[$i][$j];
                    $colMaxs[$j] = isset($colMaxs[$j]) ? max($colMaxs[$j], $matrix[$i][$j]) : $matrix[$i][$j];

                    // Diagonal calculations
                    if ($i == $j) {
                        $diagonal1Sum += $matrix[$i][$j];
                    }
                    if ($i + $j == $N - 1) {
                        $diagonal2Sum += $matrix[$i][$j];
                    }
                }
            }

            // Display results
            echo "<h3>Results:</h3>";
            echo "<h4>Row Sums and Averages:</h4>";
            for ($i = 0; $i < $N; $i++) {
                $average = $rowSums[$i] / $N;
                echo "<p>Row $i: Sum = {$rowSums[$i]}, Average = $average, Min = {$rowMins[$i]}, Max = {$rowMaxs[$i]}</p>";
            }

 echo "<h4>Column Sums and Averages:</h4>";
            for ($j = 0; $j < $N; $j++) {
                $average = $colSums[$j] / $N;
                echo "<p>Column $j: Sum = {$colSums[$j]}, Average = $average, Min = {$colMins[$j]}, Max = {$colMaxs[$j]}</p>";
            }

            echo "<h4>Diagonal Sums:</h4>";
            echo "<p>Diagonal 1 Sum = $diagonal1Sum</p>";
            echo "<p>Diagonal 2 Sum = $diagonal2Sum</p>"; // Corrected the HTML output

            $overallAverage = $overallSum / ($N * $N);
            echo "<h4>Overall Results:</h4>";
            echo "<p>Sum = $overallSum, Average = $overallAverage, Min = $overallMin, Max = $overallMax</p>";

            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 25, 2024</center>   
</body>
</html>