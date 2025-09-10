<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h2>Calculator</h2>
  <form method="POST">
    Number 1: <input type="number" name="num1"><br><br>
    Number 2: <input type="number" name="num2"><br><br>
    Operation:
    <select name="operation">
      <option value="+">Add</option>
      <option value="-">Subtract</option>
      <option value="*">Multiply</option>
      <option value="/">Divide</option>
    </select><br><br>
    <input type="submit" value="Calculate">
  </form>

  <?php
  if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operation'];

    if ($op == "+") $result = $n1 + $n2;
    if ($op == "-") $result = $n1 - $n2;
    if ($op == "*") $result = $n1 * $n2;
    if ($op == "/") $result = $n2 != 0 ? $n1 / $n2 : "Cannot divide by zero";

    echo "<h3>Result: $result</h3>";
  }
  ?>
</body>
</html>
