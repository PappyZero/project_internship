<?php
if (isset($_POST["register_btn"])) {

    include("./include/connect_DB.php");


    // Getting the user's input
    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $num = $_POST["num"];
    $gender = $_POST["gender"];

    if (empty($lastName) || empty($firstName) || empty($email) || empty($password) || empty($confirm_password) || empty($num) || empty($gender)) {
        // Sending the user back to the register page if empty. 
        header("Location: register.php");
        exit();
    } else {
        // Check if password and confirm password match
        if ($password === $confirm_password) {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Authentication to check if the email or phone number already exists
            $query = "SELECT * FROM users WHERE num = '$num' OR email = '$email' ";
            $query_result = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_result) > 0) {
                echo "<script> alert('EMAIL or PHONE NUMBER already exists. Please choose another. !'); window.location='register.php'</script>";
            } else {
                // Send/Insert the user input to the database
                $insert_query = "INSERT INTO users (lastName, firstName, email, password, num, gender)
                    VALUES ('$lastName', '$firstName', '$email', '$hashed_password', '$num', '$gender')";

                // Query the insertion to send the information to the database
                if (mysqli_query($conn, $insert_query)) {
                    echo "<script> alert('REGISTRATION SUCCESSFUL!'); window.location='login.php'</script>";
                    // Redirect to the login page after sign-up is confirmed
                    // header("location: login.php");
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        } else {
            echo "<script> alert('Passwords do not match. Please try again. !'); window.location='register.php'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>