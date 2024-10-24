<!DOCTYPE html>
<html>
<head>
    <title>Using Constants in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Using Constants</center></h1>
        <div class="box">
            <?php
            // Defining 10 Constants
            define("PI", 3.14159);  // Mathematical constant for π
            define("EULER", 2.71828);  // Euler's number
            define("GRAVITY", 9.8);  // Acceleration due to gravity (m/s²)
            define("LIGHT_SPEED", 299792458);  // Speed of light in m/s
            define("BOLTZMANN_CONSTANT", 1.380649e-23);  // In J/K
            define("PLANCK_CONSTANT", 6.62607015e-34);  // Planck's constant (J⋅s)
            define("AVOGADRO_NUMBER", 6.02214076e23);  // Avogadro's number
            define("EARTH_RADIUS", 6371);  // Radius of Earth in kilometers
            define("GOLDEN_RATIO", 1.61803);  // Golden ratio (φ)
            define("ABSOLUTE_ZERO", -273.15);  // Absolute zero in Celsius

            // Displaying Constants with Examples
            echo "<h2>Constants and Examples</h2>";
            echo "<p><strong>PI:</strong> " . PI . " <br> Example: Circumference of a circle (C = 2πr).</p>";
            echo "<p><strong>Euler's Number (e):</strong> " . EULER . " <br> Example: Used in natural logarithms.</p>";
            echo "<p><strong>Gravity (g):</strong> " . GRAVITY . " m/s² <br> Example: Used to calculate free fall velocity.</p>";
            echo "<p><strong>Speed of Light:</strong> " . LIGHT_SPEED . " m/s <br> Example: Distance traveled by light in vacuum.</p>";
            echo "<p><strong>Boltzmann Constant:</strong> " . BOLTZMANN_CONSTANT . " J/K <br> Example: Used in thermodynamics equations.</p>";
            echo "<p><strong>Planck's Constant:</strong> " . PLANCK_CONSTANT . " J⋅s <br> Example: Relates energy and frequency of photons.</p>";
            echo "<p><strong>Avogadro's Number:</strong> " . AVOGADRO_NUMBER . " <br> Example: Number of particles in 1 mole of substance.</p>";
            echo "<p><strong>Earth Radius:</strong> " . EARTH_RADIUS . " km <br> Example: Used in geospatial calculations.</p>";
            echo "<p><strong>Golden Ratio (φ):</strong> " . GOLDEN_RATIO . " <br> Example: Found in art, architecture, and nature.</p>";
            echo "<p><strong>Absolute Zero:</strong> " . ABSOLUTE_ZERO . "°C <br> Example: Lowest theoretical temperature.</p>";
            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 12, 2024</center>
</body>
</html>
