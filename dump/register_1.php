<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- CSS File -->
    <link rel="stylesheet" href="../dump/register_1.css">

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <!-- Header File -->
    <nav class="navbar fixed-top top_nav_bar bg-white">
        <div class="container-fluid top_nav">
            <img src="../images/logo/14_Education-removebg-preview.png" width="120">
        </div>
    </nav>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="signup">
            <h1>CREATE AN ACCOUNT</h1>
            <div class="social">
                <a href="https://gmail.com"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form action="#" method="post">
                <h5 class="text-center">OR ENTER YOUR DETAILS</h5>
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
                <small>By Clicking "REGISTER", You agree to our <br>
                    <a class="text-deco text-pink" href="#">Terms and Conditions</a> and <a class="text-deco text-blue" href="#">Privacy Policy</a>
                </small>
                <input type="submit" value="REGISTER" name="register_btn" />
                <small>ALREADY HAVE AN ACCOUNT ?
                    <a href="#">SIGN IN</a>
                </small>
            </form>
        </div>
    </div>
</body>

</html>