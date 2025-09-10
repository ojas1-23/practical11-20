<form action="p41.php" method="post">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
<?php
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "admin" && $pass == "12345") {
  echo "Login successful!";
} else {
  echo "Invalid login";
}
?>
