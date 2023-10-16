<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />
    <title>Welcome to Our Learning Platform</title>
</head>
<body>
    
</body>
</html>