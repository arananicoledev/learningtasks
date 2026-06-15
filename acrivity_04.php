<!DOCTYPE html>
<html>
<head>
    <title>Math Operations</title>
</head>
<body>

    <?php
    if (isset($_POST['btnSubmit'])) {

        $num1 = $_POST['txtNum1'];
        $num2 = $_POST['txtNum2'];
        $operation = $_POST['operation'];

        echo "<strong>First Number:</strong> $num1<br>";
        echo "<strong>Second Number:</strong> $num2<br>";
        echo "<strong>Operation:</strong> $operation<br><br>";

        switch ($operation) {

            case "add":
                echo "Result: " . ($num1 + $num2);
                break;

            case "subtract":
                echo "Result: " . ($num1 - $num2);
                break;

            case "multiply":
                echo "Result: " . ($num1 * $num2);
                break;

            case "divide":
                if ($num2 != 0) {
                    echo "Result: " . ($num1 / $num2);
                } else {
                    echo "Cannot divide by zero!";
                }
                break;
        }

        echo "<br><br><a href='activity_03.php'>Back</a>";
    }
    else {
    ?>

    <form method="POST" action="activity_03.php">

        <label>First Number</label><br>
        <input type="number" name="txtNum1" id="txtNum1" required><br><br>

        <label>Second Number</label><br>
        <input type="number" name="txtNum2" id="txtNum2" required><br><br>

        <label>Choose Operation</label><br>
        <select name="operation" required>
            <option value="">-- Select Operation --</option>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <br><br>

        <input type="submit" name="btnSubmit" value="Calculate">

    </form>

<?php } ?>

</body>
</html>
