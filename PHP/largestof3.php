<!-- Save this as largest_of_three.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Largest of Three Numbers</title>
</head>
<body>

<h1>Find Largest of Three Numbers</h1>

<form method="POST" action="">
  <label for="num1">Enter first number:</label>
  <input type="number" name="num1" id="num1" required><br><br>

  <label for="num2">Enter second number:</label>
  <input type="number" name="num2" id="num2" required><br><br>

  <label for="num3">Enter third number:</label>
  <input type="number" name="num3" id="num3" required><br><br>

  <input type="submit" value="Find Largest">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    
    $largest = max($num1, $num2, $num3);

    echo "<h3>The largest number is: $largest</h3>";
}
?>

</body>
</html>
