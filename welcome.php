<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome you.</title>
    
<body>
    <?php echo "<h1>Welcome you ----- as you know here are some old paper's for you " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>
