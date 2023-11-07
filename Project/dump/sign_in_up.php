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
    <!-- <link rel="stylesheet" href="./css/login_signup.css" /> -->

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
    ?>
</head>

<body>
    <div class="container">

        <!-- Signup Form -->
        <div id="signup-form" style="display: none;">
            <!-- ... Your existing signup form HTML ... -->
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
                    <input type="submit" formaction="" value="CREATE ACCOUNT" />
                    <small>ALREADY HAVE AN ACCOUNT ? SIGN IN</small>
                </form>
            </div>
        </div>


        <!-- Login Form -->
        <div id="login-form">
            <!-- ... Your existing login form HTML ... -->
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
                    <input type="submit" formaction="./home.php" value="LOGIN" />
                    <p>Remember me</p>
                    <input type="checkbox" checked="checked" />
                    <small>DON'T HAVE AN ACCOUNT ? <label for="toggle">SIGN UP</label>
                    </small>
                </form>
            </div>
        </div>

        <!-- Success Messages -->
        <div id="success-messages">
            <!-- Messages will be displayed here -->
        </div>
    </div>
</body>
<!-- Online Bootstrap-js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!-- Local bootstrap-js -->
<script src="./js/bootstrap-js/bootstrap.js"></script>

<!-- JavaScript File -->
<!-- Add this script to your HTML file -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loginForm = document.getElementById("login-form");
        const signupForm = document.getElementById("signup-form");
        const successMessages = document.getElementById("success-messages");

        // Function to toggle between login and signup forms
        function toggleForms() {
            loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
            signupForm.style.display = signupForm.style.display === "none" ? "block" : "none";
            successMessages.innerHTML = ""; // Clear any success messages
        }

        // Event listener for signup form submission
        document.getElementById("signup-form").addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch("./sign_up_connect.php", {
                    method: "POST",
                    body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        displaySuccessMessage("Registration has been completed successfully!");
                        toggleForms();
                    } else {
                        displayErrorMessage(data.message);
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });

        // Event listener for login form submission
        document.getElementById("login-form").addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch("./sign_in_connect.php", {
                    method: "POST",
                    body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        displaySuccessMessage("Login successful!");
                        window.location.href = "home.php"; // Redirect to home.php
                    } else {
                        displayErrorMessage(data.message);
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });

        // Event listener for "SIGN UP" label click
        document.querySelector('label[for="toggle"]').addEventListener("click", function() {
            toggleForms();
        });

        // Function to display success messages
        function displaySuccessMessage(message) {
            successMessages.innerHTML = `<p class="success">${message}</p>`;
        }

        // Function to display error messages
        function displayErrorMessage(message) {
            successMessages.innerHTML = `<p class="error">${message}</p>`;
        }
    });
</script>

<!-- <script src="./js/login_signup.js"></script> -->
<!-- <script src="./js/sign_in_up.js"></script> -->

</html>