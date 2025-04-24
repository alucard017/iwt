<!-- Save this as user_form.php -->
<!DOCTYPE html>
<html>
<head>
  <title>User Data Form with Validation</title>
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
    // Initialize error messages array
    $errors = [];

    // Get form data and sanitize it
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
    $skills = isset($_POST["skills"]) ? $_POST["skills"] : [];

    // Validate First Name
    if (empty($firstName)) {
        $errors[] = "First Name is required.";
    }

    // Validate Last Name
    if (empty($lastName)) {
        $errors[] = "Last Name is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Gender
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    // Validate Skills (at least one skill must be selected)
    if (empty($skills)) {
        $errors[] = "At least one programming skill must be selected.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        echo "<h3>Error(s):</h3>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // If no errors, display entered data
        echo "<h3>Entered Data:</h3>";
        echo "<p><strong>First Name:</strong> $firstName</p>";
        echo "<p><strong>Last Name:</strong> $lastName</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Programming Skills:</strong> " . implode(", ", $skills) . "</p>";
    }
}
?>

</body>
</html>
