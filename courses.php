<?php
session_start();

// Check if the user is logged in (adjust the condition as needed)
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}

// Set cache-control headers to prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Local bootstrap-css -->
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css" />

    <!-- Css File -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/courses.css">

    <!-- Brand Icon -->
    <link rel="shortcut icon" href="./images/logo/14_Education.jpg" type="image/x-icon" />

    <?php 
        include("./include/links.php") ;
        include("./header.php");
    ?>
    <title>Welcome to Our Learning Platform</title>
</head>
<body>
        <!-- Desktop View Top Nav Starts Here -->
        <!-- <nav class="navbar bg-white top_nav fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo/14_Education-removebg-preview.png" alt="Logo" width="120" height="74" cla ss="d-inline-block align-text-top">
                </a>

                <h3 class="mt-3">Enlightened Tempest</h3>

                <div class="gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="./logout.php" role="button">LOGOUT <ion-icon name="exit-outline"></ion-icon></a>
                </div>
            </div>
        </nav> -->
        <!-- Desktop View Top Nav Ends Here -->

        <!-- Side Menu starts here. -->
        <nav class="navbar navbar-dark bg-white">
            <div class="container-fluid">
                <a class="navbar-brand text-black ms-2 fw-bold course_brand" href="#">Courses  <ion-icon name="book" style="color: #3B82F6;"></ion-icon></a>
                <a class="navbar-brand text-black ms-2 fw-bold" href="#">Your Learning  <ion-icon name="library" style="color: #3B82F6;"></ion-icon></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-black"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header text-black">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Artificial Intelligence (AI)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">AI involves building systems that can learn and make decisions. 
                                    It's used in applications like image recognition, natural language processing, and recommendation systems.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Artificial Intelligence (AI)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">AI involves building systems that can learn and make decisions. 
                                    It's used in applications like image recognition, natural language processing, and recommendation systems.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </nav>
        <!-- Side Menu ends here.  -->

        <!-- Highlight Course List starts here. -->
        <div class="container mb-5">
            <button type="button" class="btn btn-outline-primary">Python Programming</button>
            <button type="button" class="btn btn-outline-primary">Java Programming</button>
            <button type="button" class="btn btn-outline-primary">C++ Programming</button>
            <button type="button" class="btn btn-outline-primary">JavaScript</button>
            <button type="button" class="btn btn-outline-primary">Web Development</button>
            <button type="button" class="btn btn-outline-primary">Mobile App Development</button>
            <button type="button" class="btn btn-outline-primary">Data Structures</button>
            <button type="button" class="btn btn-outline-primary">Algorithms</button>
            <button type="button" class="btn btn-outline-primary">Software Engineering</button>
            <button type="button" class="btn btn-outline-primary">Artificial Intelligence</button>
            <button type="button" class="btn btn-outline-primary">Machine Learning</button>
            <button type="button" class="btn btn-outline-primary">Deep Learning</button>
            <button type="button" class="btn btn-outline-primary">Natural Language Processing</button>
            <button type="button" class="btn btn-outline-primary">Computer Vision</button>
            <button type="button" class="btn btn-outline-primary">Game Development</button>
            <button type="button" class="btn btn-outline-primary">Full-Stack Development</button>
            <button type="button" class="btn btn-outline-primary">Front-End Development</button>
            <button type="button" class="btn btn-outline-primary">Back-End Development</button>
            <button type="button" class="btn btn-outline-primary">Database Management</button>
            <button type="button" class="btn btn-outline-primary">Cloud Computing</button>
            <button type="button" class="btn btn-outline-primary">DevOps</button>
            <button type="button" class="btn btn-outline-primary">Cybersecurity</button>
        </div>
        <!-- Highlight Course List ends here. -->

        <!-- Course List starts here. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="./images//content/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Enroll Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Course List starts here. -->





    <script src="./js/courses.js"></script>
    <?php 
        include("./include/scripts.php") ;
        // include("./footer.php");
    ?>
</body>
</html>