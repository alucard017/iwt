<!-- Save this as sort_array.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Sort Array in PHP</title>
</head>
<body>

<h1>Sort Array</h1>

<form method="POST" action="">
  <label for="arrayInput">Enter numbers separated by commas:</label>
  <input type="text" name="arrayInput" id="arrayInput" required><br><br>

  <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["arrayInput"];
    

    $array = array_map('intval', explode(",", $input));
   
    sort($array);
    
    echo "<h3>Sorted Array:</h3>";
    echo "<p>[" . implode(", ", $array) . "]</p>";
}
?>

</body>
</html>
