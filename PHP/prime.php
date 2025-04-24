<!-- Save this as prime.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Prime Number Checker</title>
</head>
<body>

<h1>Prime Number Checker</h1>

<form method="POST" action="">
  <label for="number">Enter a number:</label>
  <input type="number" name="number" id="number" required>
  <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);

    function isPrime($n) {
        if ($n <= 1) return false;
        if ($n == 2) return true; 
        if ($n % 2 == 0) return false; 

        for ($i = 3; $i <= sqrt($n); $i += 2) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    if (isPrime($num)) {
        echo "<h3>$num is a Prime Number.</h3>";
    } else {
        echo "<h3>$num is NOT a Prime Number.</h3>";
    }
}
?>

</body>
</html>
