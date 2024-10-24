<!DOCTYPE html>
<html>
<head>
	<title>Using Math Functions</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1><center>Using Math Functions</center></h1>
		<div class="box">
			<h2>Floating Point Numbers</h2>
			<p>Number 1: <?php $float1 = 10.5; echo $float1; ?></p>
			<p>Number 2: <?php $float2 = 20.25; echo $float2; ?></p>
			<p>Number 3: <?php $float3 = 30.75; echo $float3; ?></p>
			<p>Number 4: <?php $float4 = 40.99; echo $float4; ?></p>
			<p>Number 5: <?php $float5 = 50.50; echo $float5; ?></p>

			<h2>Whole Numbers</h2>
			<p>Number 1: <?php $int1 = 10; echo $int1; ?></p>
			<p>Number 2: <?php $int2 = 20; echo $int2; ?></p>
			<p>Number 3: <?php $int3 = 30; echo $int3; ?></p>
			<p>Number 4: <?php $int4 = 40; echo $int4; ?></p>
			<p>Number 5: <?php $int5 = 50; echo $int5; ?></p>

			<h2>Math Functions</h2>
			<p>abs(-10): <?php echo abs(-10); ?></p>
			<p>ceil(10.5): <?php echo ceil($float1); ?></p>
			<p>floor(10.5): <?php echo floor($float1); ?></p>
			<p>round(10.5): <?php echo round($float1); ?></p>
			<p>sqrt(100): <?php echo sqrt(100); ?></p>
			<p>pow(2, 3): <?php echo pow(2, 3); ?></p>
			<p>exp(1): <?php echo exp(1); ?></p>
			<p>log(100): <?php echo log(100); ?></p>
			<p>log10(100): <?php echo log10(100); ?></p>
			<p>sin(PI()/4): <?php echo sin(PI()/4); ?></p>
			<p>cos(PI()/4): <?php echo cos(PI()/4); ?></p>
			<p>tan(PI()/4): <?php echo tan(PI()/4); ?></p>
			<p>min(10, 20, 30): <?php echo min($int1, $int2, $int3); ?></p>
			<p>max(10, 20, 30): <?php echo max($int1, $int2, $int3); ?></p>

			<p><a href="index.html">Return to Main Page</a></p>
		</div>
	</div>
	<center>John Carlo G. Romera<br>October 12, 2024</center>
</body>
</html>