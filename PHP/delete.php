<?php
// Delete.php - Delete student by ID 
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "conn.php";
    $id  = intval($_POST["id"]);
    $sql = "DELETE FROM student WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        $msg = "Record ID $id deleted successfully!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
<h2>Delete Student Record</h2>
<?php if ($msg) echo "<p class='" . (str_contains($msg, 'Error') ? 'error' : 'success') . "'>$msg</p>"; ?>
<form method="post">
    Student ID: <input type="number" name="id" required><br><br>
    <input type="submit" value="Delete" onclick="return confirm('Confirm delete?')">
</form>
<br>
<a href="10.php">View Records</a>
</body>
</html>

