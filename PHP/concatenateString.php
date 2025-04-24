<!-- Save this as concatenate.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Concatenate Strings</title>
</head>
<body>

<h1>Concatenate Two Strings</h1>

<form method="POST" action="">
  <label for="string1">Enter first string:</label>
  <input type="text" name="string1" id="string1" required><br><br>

  <label for="string2">Enter second string:</label>
  <input type="text" name="string2" id="string2" required><br><br>

  <input type="submit" value="Concatenate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    $concatenatedString = $string1 . " " . $string2; // Concatenate with a space in between

    echo "<h3>Concatenated String: $concatenatedString</h3>";
}
?>

</body>
</html>
