<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Manipulating Numbers</center></h1>
        <div class="box">
            <h2> First Semester (Midterm)</h2>
            <form method="post">
                <p>Quiz 1: <input type="number" name="quiz1" required></p>
                <p>Quiz 2: <input type="number" name="quiz2" required></p>
                <p>Quiz 3: <input type="number" name="quiz3" required></p>
                <p>Project 1: <input type="number" name="project1" required></p>
                <p>Midterm Exam: <input type="number" name="midterm" required></p>

                <h2> Second Semester (Tentative Final)</h2>
                <p>Quiz 1: <input type="number" name="quiz4" required></p>
                <p>Quiz 2: <input type="number" name="quiz5" required></p>
				<p>Quiz 3: <input type="number" name="quiz6" required></p>
                <p>Project 1: <input type="number" name="project2" required></p>
                <p>Project 2: <input type="number" name="project3" required></p>
                <p>Final Exam: <input type="number" name="final_exam" required></p>

                <p><input type="submit" name="submit" value="Calculate Grades"></p>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $quiz1 = $_POST['quiz1'];
                $quiz2 = $_POST['quiz2'];
                $quiz3 = $_POST['quiz3'];
                $project1 = $_POST['project1'];
                $midterm = $_POST['midterm'];

                $averageQuizzes1 = ($quiz1 + $quiz2 + $quiz3) / 3;
                $midtermGrade = ($averageQuizzes1 * 0.3) + ($project1 * 0.2) + ($midterm * 0.5);

                $quiz4 = $_POST['quiz4'];
                $quiz5 = $_POST['quiz5'];
                $quiz6 = $_POST['quiz6'];
                $project3 = $_POST['project2'];
                $finalExam = $_POST['final_exam'];

                $averageQuizzes2 = ($quiz4 + $quiz5 + $quiz6) / 3;
                $averageProjects2 = ($project2 + $project3) / 2;
                $tentativeFinalGrade = ($averageQuizzes2 * 0.3) + ($averageProjects2 * 0.2) + ($finalExam * 0.5);

                $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

                echo "<h2>Results</h2>";
                echo "<p><strong>Midterm Grade:</strong> " . number_format($midtermGrade, 2) . "</p>";
                echo "<p><strong>Tentative Final Grade:</strong> " . number_format($tentativeFinalGrade, 2) . "</p>";
                echo "<p><strong>Final-Final Grade:</strong> " . number_format($finalFinalGrade, 2) . "</p>";
            }
            ?>

            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 12, 2024</center>
</body>
</html>
