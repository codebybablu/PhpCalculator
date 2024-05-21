<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .calculator { margin: 50px auto; padding: 40px; border: 1px solid #ccc; width: 300px; background-color: #6DC5D1;}
        .calculator input, .calculator select { width: 100%; margin: 10px 0; padding: 10px; }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required>
            
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>
            
            <label for="operation">Operation:</label>
            <select id="operation" name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            
            <input type="submit" value="Calculate">
        </form>
        
        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the input values
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            // Perform the calculation based on the selected operation
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'Error: Division by zero';
                    }
                    break;
                default:
                    $result = 'Invalid operation selected';
                    break;
            }

            // Display the result
            echo "<h3>Result: $result</h3>";
        }
        ?>
    </div>
</body>
</html>
