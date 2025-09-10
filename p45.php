<!DOCTYPE html>
<html>
<body>
  <h2>Feedback Form</h2>
  <form action="p45.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message:<br>
    <textarea name="message" required></textarea><br><br>
    <input type="submit" value="Send Feedback">
  </form>
</body>
</html>
<?php
if (isset($_POST['name'])) {
    $name = urlencode($_POST['name']);
    header("Location: p45.php?name=$name");
    exit;
}

if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Thank you, $name! Your feedback has been submitted.";
}
?>

