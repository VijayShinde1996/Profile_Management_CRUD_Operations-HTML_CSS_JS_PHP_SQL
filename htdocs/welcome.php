<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user_id']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>