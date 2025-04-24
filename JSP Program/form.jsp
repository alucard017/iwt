<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
  <head>
    <title>Form Submission</title>
  </head>
  <body>
    <h2>Enter your details:</h2>

    <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="address">Address:</label>
      <textarea
        id="address"
        name="address"
        rows="4"
        cols="50"
        required
      ></textarea
      ><br /><br />

      <input type="submit" value="Submit" />
    </form>

    <% // Check if the form is submitted if
    (request.getMethod().equalsIgnoreCase("POST")) { // Get the submitted data
    String name = request.getParameter("name"); String email =
    request.getParameter("email"); String address =
    request.getParameter("address"); // Display the submitted data out.println("
    <h3>Submitted Data:</h3>
    "); out.println("
    <p><strong>Name:</strong> " + name + "</p>
    "); out.println("
    <p><strong>Email:</strong> " + email + "</p>
    "); out.println("
    <p><strong>Address:</strong> " + address + "</p>
    "); } %>
  </body>
</html>
