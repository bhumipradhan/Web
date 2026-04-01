<?php
$cookie_name = "UserTheme";
$cookie_value = "Dark Mode";

// Set cookie 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Cookies</h2>

    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set yet.<br>";
        echo "<b>Action:</b> Cookie has been set now. Please refresh the page to see it.";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "<b>Value stored:</b> " . $_COOKIE[$cookie_name] . " (Used for preferences).";
    }
    ?>
</body>
</html>
