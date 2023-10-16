<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css File -->
    <link rel="stylesheet" href="./login_1.css">

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="../images/logo/14_Education.jpg" type="image/x-icon" />
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Header File -->
        <nav class="navbar fixed-top top_nav_bar bg-white">
            <div class="container-fluid top_nav">
                <img src="../images/logo/14_Education-removebg-preview.png" width="120">
            </div>
        </nav>
    </header>


    <section>
        <div class="login-box">
            <form action="../login_connect.php" method="post">
                <h2>LOGIN</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="login_email" required>
                    <label for="login_email">Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="login_password" required>
                    <label for="login_password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="../register.php">Register</a></p>
                </div>
            </form>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>