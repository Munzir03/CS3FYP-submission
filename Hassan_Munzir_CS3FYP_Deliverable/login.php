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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />

        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/themes.css" />
        <title>Sign Up | CV Builder</title>
    </head>

	<body>

		   <!-- HEADER -->
           <header class="custom-header">
            <nav class="navbar navbar-expand-lg static-top navbar-dark">
                <div class="container">
                    <h1 class="logo">CeeVeeIT</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- NAVIGATION -->
                    <div class="collapse navbar-collapse mt-md-3" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <button class="nav-link pl-0 pr-0" aria-label="Go to home"><a href="index.php">Home</a></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link pl-0 pr-0" aria-label="Switch to My Resumes page"><a href="builder.php">Create a Resume</a></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link pl-0 pr-0" aria-label="Switch to My Help page"><a href="help.php">Help</a></button>
                            </li>
                            <?php echo $logoutButton; ?>
                        <?php echo $loginButton; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
		
			 <!-- SIGN UP FORM -->
			 <div class="container main-container">
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="card mt-5">
							<div class="card-header text-center">
								Login to your account
							</div>
							<div class="card-body">
	
	
								<form action="database.php" method="post" novalidate>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="username" class="form-control" id="username" placeholder="Enter your email">
									</div>
								
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
									</div>
								
			
								
									<button type="submit" class="btn btn-primary btn-block">Login</button>
								</form>
								<div class="mt-3 text-center">
									<p>Don't have an account? <a href="signup.php">Sign up</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
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

    .navbar .nav-item .nav-link.active {
        color: #dc3545 !important; /* Bright red color for the active page link */
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



		

		     <!-- FOOTER -->
			 <footer class="container-fluid custom-footer">
				<div class="container text-right">
					CeeVeeIT by Munzir Hassan - 2024
				</div>
			</footer>
	
			<!-- Scripts -->
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
