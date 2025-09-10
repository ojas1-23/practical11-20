<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
</head>
<body>
  <h2>Register</h2>
  <form method="POST" action="p47.php">
    Username: <input type="text" name="username"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Register">
  </form>
</body>
</html>
<?php
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($username) || empty($email) || empty($password)) {
    echo "All fields are required!";
  } else {
    echo "Registration Successful!<br>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    echo "Password: $password"; // Never show password in real applications
  }
}
?>

