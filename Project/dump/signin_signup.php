<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN / SIGN UP</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- CSS File -->
    <link rel="stylesheet" href="./css/login_signup.css" />

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <!-- Header File -->
    <nav class="navbar fixed-top top_nav_bar bg-white">
        <div class="container-fluid top_nav">
            <img src="./images/logo/14_Education-removebg-preview.png" width="120">
        </div>
    </nav>
    <?php
    //include("./header.php")
    // include("./sign_in_connect.php")
    ?>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="toggle" />
        <div class="signin">
            <h1>SIGN IN</h1>
            <div class="social">
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form action="./sign_in_connect.php" method="post">
                <p>USE ENTER INFO</p>
                <input type="email" placeholder="EMAIL" class="form-control" id="login_email" name="login_email" required />
                <input type="password" placeholder="PASSWORD" class="form-control" id="login_password" name="login_password" required />
                <br>
                <a href="#">Forgot password? </a>
                <br>
                <input type="submit" value="LOGIN" />
                <p>Remember me</p>
                <input type="checkbox" checked="checked" />
                <small>DON'T HAVE AN ACCOUNT ? <label for="toggle">SIGN UP</label>
                </small>
            </form>
        </div>

        <div class="signup">
            <h1>CREATE AN ACCOUNT</h1>
            <div class="social">
                <a href="https://gmail.com"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form action="./sign_up_connect.php" method="post">
                <p>OR ENTER YOUR DETAILS</p>
                <input type="text" placeholder="LAST NAME" class="form-control" id="lastName" name="lastName" required />
                <input type="text" placeholder="FIRST NAME" class="form-control" id="firstName" name="firstName" required />
                <input type="email" placeholder="EMAIL" class="form-control" id="email" name="email" required />
                <input type="password" placeholder="PASSWORD" class="form-control" id="password" name="password" required />
                <input type="password" placeholder="CONFIRM PASSWORD" class="form-control" id="confirm_password" name="confirm_password" required />
                <input type="number" placeholder="PHONE NUMBER" class="form-control" id="num" name="num" required />
                <br>
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Rather not say</option>
                </select><br>
                <p><small>By Clicking "CREATE ACCOUNT", You agree to our <br>
                        <a class="text-deco text-pink" href="#">Terms and Conditions</a> and <a class="text-deco text-blue" href="#">Privacy Policy</a>
                    </small></p>
                <input type="submit" value="CREATE ACCOUNT" />
                <small>ALREADY HAVE AN ACCOUNT ?
                    <label for="toggle">SIGN IN</label>
                </small>
            </form>
        </div>
    </div>
</body>
<!-- JavaScript and jQuery (if needed) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Online Bootstrap-js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Local bootstrap-js -->
<script src="./js/bootstrap-js/bootstrap.js"></script>

<!-- JavaScript File -->
<script src="./js/login_signup.js"></script>

</html>