<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Enhanced Form (With PHP Validation)</h2>
    
    <?php
    $nameErr = $emailErr = $phoneErr = "";
    $name = $email = $phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. Validate Name (Required)
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        // 2. Validate Email (Required & Format)
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = htmlspecialchars($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // 3. Validate Phone (Required & Regex: starts with 98 or 97)
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone is required";
        } else {
            $phone = htmlspecialchars($_POST["phone"]);
            // Regex for 10 digits starting with 98 or 97
            if (!preg_match("/^(98|97)[0-9]{8}$/", $phone)) {
                $phoneErr = "Phone must start with 98 or 97 and have 10 digits";
            }
        }

        // Display Data only if there are no errors
        if ($nameErr == "" && $emailErr == "" && $phoneErr == "") {
            echo "<div style='color:green; border:1px solid green; padding:10px;'>";
            echo "<h3>Validation Successful!</h3>";
            echo "Name: $name <br> Email: $email <br> Phone: $phone";
            echo "</div><br>";
        }
    }
    ?>

    <form method="post" action="">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red">* <?php echo $nameErr; ?></span><br><br>
        
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red">* <?php echo $emailErr; ?></span><br><br>
        
        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span style="color:red">* <?php echo $phoneErr; ?></span><br><br>
        
        <input type="submit" value="Submit with Validation">
    </form>

    <br>
</body>
</html>
