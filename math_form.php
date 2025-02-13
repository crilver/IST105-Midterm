<html>
    <h1>Midterm Exam - Cristobal Lara</h1>
    <form action="process.php" method="post">
        <label>Input for number 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label>Input for number 2:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="operation">Select operation:</label>
        <select name="operation">
            <option value="add">addition</option>
            <option value="sub">subtraction</option>
            <option value="mul">multiplication</option>
            <option value="div">division</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>
</html>