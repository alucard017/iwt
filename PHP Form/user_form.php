<!-- Save this as user_form.php -->
<!DOCTYPE html>
<html>
<head>
  <title>User Data Form</title>
</head>
<body>

<h1>User Data Form</h1>

<form method="POST" action="">
  <label for="firstName">First Name:</label>
  <input type="text" name="firstName" id="firstName" required><br><br>

  <label for="lastName">Last Name:</label>
  <input type="text" name="lastName" id="lastName" required><br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br><br>

  <label>Gender:</label>
  <input type="radio" name="gender" value="Male" required> Male
  <input type="radio" name="gender" value="Female" required> Female
  <input type="radio" name="gender" value="Other" required> Other<br><br>

  <label>Programming Skills (select one or more):</label><br>
  <input type="checkbox" name="skills[]" value="PHP"> PHP<br>
  <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript<br>
  <input type="checkbox" name="skills[]" value="Python"> Python<br>
  <input type="checkbox" name="skills[]" value="Java"> Java<br>
  <input type="checkbox" name="skills[]" value="C++"> C++<br>
  <input type="checkbox" name="skills[]" value="Ruby"> Ruby<br>
  <input type="checkbox" name="skills[]" value="Go"> Go<br>
  <input type="checkbox" name="skills[]" value="C#"> C#<br><br>

  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);

    // Get selected skills (array)
    $skills = isset($_POST["skills"]) ? $_POST["skills"] : [];

    // Display entered data
    echo "<h3>Entered Data:</h3>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";

    echo "<p><strong>Programming Skills:</strong> ";
    if (empty($skills)) {
        echo "No skills selected.";
    } else {
        echo implode(", ", $skills);
    }
    echo "</p>";
}
?>

</body>
</html>
