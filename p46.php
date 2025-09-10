<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
  <h2>Contact Us</h2>
  <form method="GET" action="p46.php">
    Name: <input type="text" name="name"><br><br>
    Subject: <input type="text" name="subject"><br><br>
    Message: <textarea name="message"></textarea><br><br>
    <input type="submit" value="Send">
  </form>
</body>
</html>
<?php
if (isset($_GET['name'])) {
  $name = htmlspecialchars($_GET['name']);
  echo "Thank you $name, we will contact you soon!";
}
?>
