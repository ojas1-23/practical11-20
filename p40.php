<!DOCTYPE html>
<html>
<body>
  <h2>Welcome Form</h2>
  <form action="p40.php" method="post">
    Enter your name: <input type="text" name="name" required>
    <input type="submit" value="Submit">
  </form>

</body>
</html>

<?php
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "Welcome, $name!";
}
?>

