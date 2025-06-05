<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  echo "<h1>Thanks for reaching out, $name!</h1>";
  echo "<p>We received your message:</p>";
  echo "<blockquote>$message</blockquote>";
  echo "<p>We'll contact you at: $email</p>";
} else {
  echo "No form data submitted.";
}
?>
