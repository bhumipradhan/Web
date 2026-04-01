<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Simple Form (No Validation)</h2>
    
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name"><br><br>
        
        <label>Email:</label>
        <input type="text" name="email"><br><br>
        
        <label>Phone:</label>
        <input type="text" name="phone"><br><br>
        
        <button type="submit" name="submitBtn">Submit</button>
    </form>

    <br><hr>

    <?php
    if (isset($_POST['submitBtn'])) {

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        echo "<h3>Submitted Data:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Phone: " . $phone;
    }
    ?>
    <br><br>
</body>
</html>
