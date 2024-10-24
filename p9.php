<!DOCTYPE html>
<html>
<head>
    <title>Single-dimensional Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Single-dimensional Array</center></h1>
        <div class="box">
            <h2>People Information</h2>
            <?php
            // Initialize parallel arrays
            $names = ["John", "Alice", "Bob", "Diana", "Charlie", "Eve", "Frank", "Grace", "Hannah", "Ethan"];
            $ages = [25, 30, 22, 28, 35, 27, 24, 29, 31, 26];
            $sexes = ["Male", "Female", "Male", "Female", "Male", "Female", "Male", "Female", "Female", "Male"];
            $nationalities = ["American", "British", "Canadian", "Australian", "Indian", "German", "French", "Italian", "Spanish", "Japanese"];

            // Function to sort the arrays based on names
            function sortPeople($names, $ages, $sexes, $nationalities) {
                $length = count($names);
                for ($i = 0; $i < $length; $i++) {
                    for ($j = $i + 1; $j < $length; $j++) {
                        if ($names[$i] > $names[$j]) {
                            // Swap names
                            $tempName = $names[$i];
                            $names[$i] = $names[$j];
                            $names[$j] = $tempName;

                            // Swap ages
                            $tempAge = $ages[$i];
                            $ages[$i] = $ages[$j];
                            $ages[$j] = $tempAge;

                            // Swap sexes
                            $tempSex = $sexes[$i];
                            $sexes[$i] = $sexes[$j];
                            $sexes[$j] = $tempSex;

                            // Swap nationalities
                            $tempNationality = $nationalities[$i];
                            $nationalities[$i] = $nationalities[$j];
                            $nationalities[$j] = $tempNationality;
                        }
                    }
                }
                return [$names, $ages, $sexes, $nationalities];
            }

            // Display unsorted lists
            echo "<h3>Unsorted List:</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($names); $i++) {
                echo "<tr><td>{$names[$i]}</td><td>{$ages[$i]}</td><td>{$sexes[$i]}</td><td>{$nationalities[$i]}</td></tr>";
            }
            echo "</table>";

            // Sort the arrays
            list($sortedNames, $sortedAges, $sortedSexes, $sortedNationalities) = sortPeople($names, $ages, $sexes, $nationalities);

            // Display sorted lists
            echo "<h3>Sorted List (by Name):</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($sortedNames); $i++) {
                echo "<tr><td>{$sortedNames[$i]}</td><td>{$sortedAges[$i]}</td><td>{$sortedSexes[$i]}</td><td>{$sortedNationalities[$i]}</td></tr>";
            }
            echo "</table>";
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 25, 2024</center>
</body>
</html>