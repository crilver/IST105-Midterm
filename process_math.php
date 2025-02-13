<?php
    $num1 = escapeshellarg($_POST['num1']);
    $num2 = escapeshellarg($_POST['num2']);
    $operation = escapeshellarg($_POST['operation']);
    $command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
    $output = shell_exec($command);

    echo "<h1>Midterm Exam - Cristobal Lara</h1>";
    echo "<h2>Python Script Result</h2>";
    echo "<div>$output</div>";
?>