<!-- Save this as factorial.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Factorial Calculator</title>
</head>
<body>

<h1>Factorial Calculator</h1>

<form method="POST" action="">
  <label for="number">Enter a number:</label>
  <input type="number" name="number" id="number" required>
  <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);

    function factorial($n) {
        if ($n < 0) return "Undefined for negative numbers";
        if ($n === 0 || $n === 1) return 1;

        $fact = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }

    $result = factorial($num);
    echo "<h3>Factorial of $num is: $result</h3>";
}
?>

</body>
</html>
