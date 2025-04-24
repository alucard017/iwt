<!-- Save this as replace_word.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Replace Word in String</title>
</head>
<body>

<h1>Replace Word in String</h1>

<form method="POST" action="">
  <label for="originalString">Enter the original string:</label>
  <input type="text" name="originalString" id="originalString" required><br><br>

  <label for="wordToReplace">Word to replace:</label>
  <input type="text" name="wordToReplace" id="wordToReplace" required><br><br>

  <label for="replacementWord">Replacement word:</label>
  <input type="text" name="replacementWord" id="replacementWord" required><br><br>

  <input type="submit" value="Replace Word">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $originalString = $_POST["originalString"];
    $wordToReplace = $_POST["wordToReplace"];
    $replacementWord = $_POST["replacementWord"];

  
    $modifiedString = str_replace($wordToReplace, $replacementWord, $originalString);

    echo "<h3>Modified String: $modifiedString</h3>";
}
?>

</body>
</html>
