<html>
<body>
    <h1>Grade Calculator</h1>
    
    <!-- Grade form -->
    <form method="post" action="">
        Enter your marks: <input type="number" name="score" required><br><br>
        <input type="submit" name="submit" value="Calculate grade">
    </form>

    <?php
    // Connects the PHP code with the form
    if(isset($_POST['submit'])){
        $score = $_POST['score'];
        $grade = '';

        // Switch statement to determine the grade based on the score
        switch(true){
            case ($score <= 70 && $score <= 100):
                $grade = 'A';
                break;
            case ($score <= 60 && $score < 70):
                $grade = 'B';
                break;
            case ($score <= 50 && $score < 60):
                $grade = 'C';
                break;
            case ($score >= 40 && $score < 50):
                $grade = 'D';
                break;
            case ($score < 40):
                $grade = 'F';
                break;
            default:
                $grade = 'Invalid input';
        }

        // Prints the grade
        echo "<br><b>Your grade is</b> " . $grade;
    }
    ?>
</body>
</html>
