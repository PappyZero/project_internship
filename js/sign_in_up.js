// <!-- Add this script to your HTML file -->
    document.addEventListener("DOMContentLoaded", function () {
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
        document.getElementById("signup-form").addEventListener("submit", function (e) {
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
        document.getElementById("login-form").addEventListener("submit", function (e) {
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
        document.querySelector('label[for="toggle"]').addEventListener("click", function () {
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
