<?php
$lastName = $_POST["lastName"];
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$num = $_POST["num"];
$gender = $_POST["gender"];

// PASSWORD AND CONFIRM PASSWORD CONFIRMTION:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password == $confirm_password) {

        // DATABASE CONNECTION
        $conn = new mysqli("localhost", "root", "", "signup_e_learning");
        if ($conn->connect_errno) {
            die("Connection Failed : " . $conn->connect_errno);
        } else {
            $stmt = $conn->prepare("insert into registration(lastName, firstName, email, password,  num, gender)
            values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssis", $lastName, $firstName, $email, $password, $num, $gender);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "<script> alert('REGISTRATION SUCCESSFULLY!'); window.location='login_signup.php'</script>";
            // Redirect to the login page after successful registration
            // header("Location: login_signup.php");
            // exit(); // Terminate script execution after the redirection
        }
    } else {

        // Passwords do not match, display an error message or take appropriate action
        // $error_message = "Passwords do not match. Please try again.";
        echo "<script> alert('Invalid email or password !'); window.location='login_signup.php'</script>";
    }
}
