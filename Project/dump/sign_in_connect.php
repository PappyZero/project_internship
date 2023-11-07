<?php
$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];

$con = new mysqli("localhost", "root", "", "signup_e_learning");
if ($con->connect_errno) {
    die("Failed to Connect : " . $con->connect_errno);
} else {
    $statmt = $con->prepare("select * from registration where email = ?");
    $statmt->bind_param("s", $login_email);
    $statmt->execute();
    $statmt_result = $statmt->get_result();
    if ($statmt_result->num_rows > 0) {
        $data = $statmt_result->fetch_assoc();
        if ($data["password"] === $login_password) {
            echo "<script> alert('LOGIN SUCCESSFULLY!'); window.location='home.php'</script>";
            // Redirect to home.php with a success flag and the user's email in the URL
            // header("Location: home.php?success=true&login_email=" . urlencode($login_email));
            // Make sure to exit after the redirection
            // exit;
        } else {
            echo "<script> alert(' Invalid email or password !'); window.location='login_signup.php'</script>";
        }
    } else {
        echo "<script> alert('Invalid email or password !'); window.location='login_signup.php'</script>";
    }
}
