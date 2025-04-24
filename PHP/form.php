<!-- save this as form.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Form</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Welcome, $name!</h2>";
    echo "<p>Your email address is: $email</p>";
} else {
?>

<h1>Enter Your Details</h1>
<form method="POST" action="">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>
