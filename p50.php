<?php
// Step 1: If a button was clicked, save theme in cookie
if (isset($_GET['theme'])) {
    $theme = $_GET['theme']; // light or dark
    // Set cookie for 7 days
    setcookie("theme", $theme, time() + (7 * 24 * 60 * 60), "/");
    // Refresh page to apply theme
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Step 2: Get the theme from cookie (if set)
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = "light"; // default theme
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Light / Dark Mode Example</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            padding-top: 50px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Light theme */
        .light {
            background-color: white;
            color: black;
        }

        /* Dark theme */
        .dark {
            background-color: black;
            color: white;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h1>🌞 Light / 🌙 Dark Mode</h1>

    <form method="get">
        <button type="submit" name="theme" value="light">Light Mode</button>
        <button type="submit" name="theme" value="dark">Dark Mode</button>
    </form>

    <p>Current Theme: <b><?php echo ucfirst($theme); ?></b></p>
</body>
</html>
