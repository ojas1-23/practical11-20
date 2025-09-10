<!DOCTYPE html>
<html>
<body>
  <h2>Favorite Language</h2>
  <form action="p43.php" method="post">
    Which is your favorite programming language?<br><br>
    <input type="radio" name="language" value="PHP"> PHP<br>
    <input type="radio" name="language" value="JavaScript"> JavaScript<br>
    <input type="radio" name="language" value="Python"> Python<br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
<?php
if (isset($_POST['language'])) {
    $lang = $_POST['language'];
    echo "You selected: $lang";
}
?>
