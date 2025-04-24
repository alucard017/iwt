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
        // Prepare the data to be written into the file
        $data = "First Name: $firstName\n";
        $data .= "Last Name: $lastName\n";
        $data .= "Email: $email\n";
        $data .= "Gender: $gender\n";
        $data .= "Programming Skills: " . implode(", ", $skills) . "\n";
        $data .= "--------------------------------------\n";

        // Specify the file path (Make sure the file is writable)
        $file = "user_data.txt";

        // Open the file in append mode and write the data
        if (file_put_contents($file, $data, FILE_APPEND) !== false) {
            echo "<h3>Form data successfully saved!</h3>";
        } else {
            echo "<h3>There was an error saving the data.</h3>";
        }
    }
}
?>

</body>
</html>
