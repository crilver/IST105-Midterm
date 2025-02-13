<?php
    $num1 = escapeshellarg($_POST['num1']);
    $num2 = escapeshellarg($_POST['num2']);
    $operation = escapeshellarg($_POST['operation']);
    $command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
    $output = shell_exec($command);
    $hostname = gethostname();

    echo "<h1>Midterm Exam - Cristobal Lara</h1>";
    echo "<h2>This code is running on server -> $hostname</h2>";
    echo "<h2>Python Script Result</h2>";
    echo "<div>$output</div>";
?>