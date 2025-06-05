<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Contact Form</h1>
  <form action="process.php" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <input type="submit" value="Send">
  </form>
</body>
</html>
