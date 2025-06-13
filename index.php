<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/app.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="simple-calculator">
        <h3>Money Converter</h3>
        <div class="images">
            <img src="./images/business_revenue.jpg" alt="" width="350px" srcset="">
        </div>

        <form method="post">
            <div>
                <label for="num1">Enter First number</label>
                <input type="number" name="num1" id=" num1" step="any" required>
            </div>
            <div>
                <label for="num1">Enter First number</label>
                <input type="number" name="num2" id=" num2" step="any" required>
            </div>

            <div>
                <label for="operation"> Type of operation</label>
                <select name="operation" id="operation">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                </select>
            </div>

            <button class="btn" type="submit">Calculate</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            echo '<div class="resulted" > ';
            if ($operation == "add") {
                $result = $num1 + $num2;
                echo "Result of adding : $result";
            } elseif ($operation == "subtract") {
                $result = $num1 - $num2;
                echo "Result of subtraction : $result";
            } elseif ($operation == "multiply") {
                $result = $num1 * $num2;
                echo "The result of multiply of : $result";
            }

            echo '</div>';
        }
        ?>
    </div>
</body>

</html>