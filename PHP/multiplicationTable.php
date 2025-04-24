<!-- Save this as multiplication_table.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Multiplication Table</title>
</head>
<body>

<h1>Multiplication Table</h1>

<form method="POST" action="">
  <label for="number">Enter a number:</label>
  <input type="number" name="number" id="number" required><br><br>

  <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];

    echo "<h3>Multiplication Table of $num:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$num × $i</td>";
        echo "<td>" . ($num * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
