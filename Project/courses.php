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
        <!-- Side Menu starts here. -->
        <nav class="navbar navbar-dark bg-white">
            <div class="container-fluid">
                <a class="navbar-brand text-black ms-2 fw-bold course_brand" href="./courses.php">Courses  <ion-icon name="book" style="color: #3B82F6;"></ion-icon></a>
                <a class="navbar-brand text-black ms-2 fw-bold" href="./your_learning.php">Your Learning  <ion-icon name="library" style="color: #3B82F6;"></ion-icon></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-black"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header text-black">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Subjects</h5>
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
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Web Development</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Are you new to web development and eager to start building your own websites? 
                                        Our Web Development Fundamentals course is the perfect entry point. You'll embark on a journey from the basics 
                                        of HTML and CSS to mastering responsive web design. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Python for Data Science</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Unlock the power of data with our Python for Data Science course. 
                                        Dive into the world of data analysis, visualization, and machine learning using Python, 
                                        one of the most sought-after programming languages in the data science industry. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Full-Stack Web Development with JavaScript</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Are you new to web development and eager to start building your own websites? 
                                        Our Web Development Fundamentals course is the perfect entry point. You'll embark on a journey from the basics 
                                        of HTML and CSS to mastering responsive web design. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Full-Stack Web Development with JavaScript</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Are you new to web development and eager to start building your own websites? 
                                        Our Web Development Fundamentals course is the perfect entry point. You'll embark on a journey from the basics 
                                        of HTML and CSS to mastering responsive web design. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Cloud Computing and AWS/Azure/GCP</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Cloud computing allows businesses to scale and store data efficiently.
                                         AWS, Azure, and GCP are the major cloud platforms.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Blockchain Technology</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">Blockchain is known for its applications in cryptocurrency, 
                                        but it's also used for secure, transparent record-keeping in various industries.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Cybersecurity and Ethical Hacking</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">With an increasing number of cyber threats, cybersecurity professionals are in high demand. 
                                        Ethical hackers help secure systems. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">DevOps (Development and Operations)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">DevOps bridges the gap between software development and IT operations, focusing on automation and collaboration. 
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Internet of Things (IoT)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">IoT involves connecting devices to the internet to collect and exchange data. 
                                        It has applications in home automation, healthcare, and more.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Internet of Things (IoT)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">IoT involves connecting devices to the internet to collect and exchange data. 
                                        It has applications in home automation, healthcare, and more.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Internet of Things (IoT)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">IoT involves connecting devices to the internet to collect and exchange data. 
                                        It has applications in home automation, healthcare, and more.
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-black sub_list" id="sub_list" href="#">Internet of Things (IoT)</a>
                                <ul class="course_list text-start" id="course_list">
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="#">IoT involves connecting devices to the internet to collect and exchange data. 
                                        It has applications in home automation, healthcare, and more.
                                    </a>
                                </ul>
                            </li>
                        </ul> -->

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
                                <h5 class="card-title">Data Science MicroMasters</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <br>
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
                                <h5 class="card-title">Google Cloud Platform (GCP) - Complete Course</h5>
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
                                <h5 class="card-title">Google Cloud Platform (GCP) - Complete Course</h5>
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
                                <h5 class="card-title">Certified Ethical Hacker (CEH)</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <br>
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
                                <h5 class="card-title">The Web Developer Bootcamp</h5>
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
                                <h5 class="card-title">DevOps Engineer</h5>
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
                                <h5 class="card-title">IoT Security</h5>
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
                                <h5 class="card-title">AI For Everyone</h5>
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
                                <h5 class="card-title">Data Science MicroMasters</h5>
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
                                <h5 class="card-title">Cybersecurity Specialization</h5>
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