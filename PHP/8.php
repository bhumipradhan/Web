<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>PHP Button</h2>
         
    <form method="POST">
        <button type="submit" name="Btn" style="padding:10px 20px; font-size:16px;">
            Click Me for a Message!
        </button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Btn'])) {
        echo "<h3 style='color: blue;'>Hello! You clicked the Button using PHP!</h3>";
    }
    ?>

</body>
</html>
