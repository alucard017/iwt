<!-- Save this as reverse_string.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Reverse a String</title>
</head>
<body>

<h1>Reverse a String</h1>

<form method="POST" action="">
  <label for="text">Enter a string:</label>
  <input type="text" name="text" id="text" required>
  <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["text"];

    $reversed = strrev($str);  // PHP function to reverse the string

    echo "<h3>Reversed string: $reversed</h3>";
}
?>

</body>
</html>
