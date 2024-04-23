<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['user_logged_in'])) {
    $logoutButton = '<li class="nav-item">
                        <a class="nav-link pl-0 pr-0" href="logout.php">Logout</a>
                    </li>';
    $loginButton = ''; // No need to show the login button if the user is logged in
} else {
    $logoutButton = ''; // No need to show the logout button if the user is not logged in
    $loginButton = '<li class="nav-item">
                        <a class="nav-link pl-0 pr-0" href="login.php">Login</a>
                    </li>';
}



if (isset($_SESSION['flash'])) {
    $message = $_SESSION['flash']['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['flash']);  
}

if (isset($_SESSION['flash'])) {
    $message = $_SESSION['flash']['message'];
    echo "<script type='text/javascript'>alert('".addslashes($message)."');</script>";
    unset($_SESSION['flash']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CV Builder</title>
    <!-- Include CSS links here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/themes.css">
</head>
<body>
    <!-- HEADER -->
    <header class="custom-header">
        <nav class="navbar navbar-expand-lg static-top navbar-dark">
            <div class="container">
                <h1 class="logo">CeeVeeIT</h1>
                <!-- NAVIGATION -->
                <div class="collapse navbar-collapse mt-md-3" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0 active">Home</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0"><a href="builder.php">Create a Resume</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0"><a href="help.php">Help</a></button>
                        </li>
                        <?php echo $logoutButton; ?>
                        <?php echo $loginButton; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- BANNER -->
    <div class="banner text-center">
        <h2>Build Your Future with CeeVeeIT</h2>
 
        
    
    </div>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    

    .custom-header .navbar {
        background-color: #333;
    }

    .navbar .navbar-brand {
        color: #ffffff;
        font-size: 20px; /* Larger brand name */
    }

    .navbar a{
        color: white;
    }


    .navbar .navbar-nav .nav-item .nav-link {
    
        font-size: 20px;
    }

    .navbar .navbar-nav .nav-item .nav-link:hover {
        color: #cddc39; /* Bright hover color */
    }

    .banner {
        color: white;
        background-image: url('interview.png');
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .banner h2 {
        font-size: 120px;
        margin: 0 0 10px;
    }

   

   

    .main-container {
        padding: 20px;
        background: #ffffff; /* Clear white background for content */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: -50px;
        border-radius: 8px;
    }

    .card {
        background: #f9f9f9;
        border: none;
    }

    .card h4 {
        color: #0062cc; /* Echoing primary color for headings */
    }

    .card-body p {
        font-size: 20px;
        color: #666; /* Dark gray text for readability */
    }

    .btn-primary {
        background-color: #0062cc;
        border-color: #005cbf;
    }

    .btn-primary:hover {
       
        background-color: #005cbf;
        border-color: #004085;
    }

    .custom-footer {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        text-align: right;
    }

    
    
    
</style>


    <!-- MAIN CONTENT -->
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              
                    <div class="welcome-text">
                        Welcome to CeeVeeIT
                    </div>
                    <div class="card-body">
                        <p>CeeVeeIT is your ultimate tool for creating professional resumes and managing your portfolio effortlessly. Whether you're applying for a job or showcasing your skills, we've got you covered!</p>
                        <p>Get started today and take the first step towards crafting your dream career.</p>
                        <!-- "Get Started" Button -->
                        <div class="text-center">
                            <a href="signup.php" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-edit fa-3x"></i>
                <h4>Easy to Use</h4>
                <p>Simple, intuitive controls make it easy to create resumes.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-briefcase fa-3x"></i>
                <h4>Professional Templates</h4>
                <p>Choose from a variety of templates designed for success.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-user-check fa-3x"></i>
                <h4>Get Noticed</h4>
                <p>Build resumes that get you noticed by top employers.</p>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">What Our Users Say</h2>
                <div class="testimonial-slider">
                    <!-- Slider for testimonials here -->
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="container-fluid custom-footer">
        <div class="container text-right">
            CeeVeeIT by Munzir Hassan - 2024
        </div>
    </footer>

    <!-- Include JavaScript links here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/html2pdf.bundle.min.js"></script>
    <script src="assets/js/anchorme.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>
