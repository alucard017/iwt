<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
  <head>
    <title>Divide Two Numbers</title>
  </head>
  <body>
    <h2>Enter two numbers to divide:</h2>

    <form action="" method="POST">
      <label for="num1">Number 1:</label>
      <input type="number" id="num1" name="num1" required /><br /><br />

      <label for="num2">Number 2:</label>
      <input type="number" id="num2" name="num2" required /><br /><br />

      <input type="submit" value="Divide" />
    </form>

    <% // Check if the form is submitted if
    (request.getMethod().equalsIgnoreCase("POST")) { // Get the submitted values
    double num1 = Double.parseDouble(request.getParameter("num1")); double num2
    = Double.parseDouble(request.getParameter("num2")); // Check for division by
    zero if (num2 != 0) { double result = num1 / num2; out.println("
    <h3>Result:</h3>
    "); out.println("
    <p>" + num1 + " ÷ " + num2 + " = " + result + "</p>
    "); } else { out.println("
    <h3>Error:</h3>
    "); out.println("
    <p>Cannot divide by zero.</p>
    "); } } %>
  </body>
</html>
