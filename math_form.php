<html>
    <h1>Midterm Exam - Cristobal Lara</h1>
    <h2>Welcome to the Mathematical Application!</h2>
    <h2>
        This application is hosted on my EC2 instance with Public IP:
        <?php 
            $ipv4 = file_get_contents("http://checkip.amazonaws.com/");
            echo htmlspecialchars($ipv4); 
        ?>
    </h2>
    <h2>Enter two numbers and select an operation to calculate the result.</h2>
    <form action="process_math.php" method="post">
        <label>Number 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label>Number 2:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="operation">Select operation:</label>
        <select name="operation">
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>
</html>