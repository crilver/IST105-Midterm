<?php
    $num1 = escapeshellarg($_POST['num1']);
    $num2 = escapeshellarg($_POST['num2']);
    $operation = escapeshellarg($_POST['operation']);
    $command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
    $output = shell_exec($command);
    $ipv4 = file_get_contents("http://checkip.amazonaws.com/");
    $host = $_SERVER['HTTP_HOST'];

    echo "<h1>Midterm Exam - Cristobal Lara</h1>";
    echo "<div>$output</div>";
    echo "<h2>This result was processed on my EC2 instance with Public IP: $ipv4</h2>";
    echo "<h2>Access the application via Load Balancer URL: http://$host/math_form.php</h2>";
?>