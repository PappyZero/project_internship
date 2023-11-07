<?php
session_start();

include("./include/connect_DB.php");

if (isset($_GET['token']))
{
    $token = $_GET['token'];
    $verify_query = "SELECT verify_token, verify_status FROM users WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn, $verify_query);

    if(mysqli_num_rows($verify_query_run) > 0)
    {
        $row = mysqli_fetch_array($verify_query_run);
        // echo 
        if($row['verify_status'] == '0') 
        {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE users SET verify_status='1' WHERE verify_token='$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($conn, $update_query);

            if($update_query_run)
            {
                $_SESSION['status'] = "This account has been verified, Please log in! ";
                header(("Location: login.php"));
                exit(0);
                
            }
            else
            {
                $_SESSION['status'] = "Verification Failed! ";
                header(("Location: login.php"));
                exit(0);
                
            }

        }
        else
        {
            $_SESSION['status'] = "This Email has already been verified. Please log in! ";
            header(("Location: login.php"));
            exit(0);

        } 
    }
    else
    {
        $_SESSION['status'] = "Token does not exists! ";
        header(("Location: login.php"));

    }
     

}

else
{
    $_SESSION['status'] = "Not Allowed";
    header(("Location: login.php"));
}



?>