<?php
session_start();

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['username'], $_POST['password'])) {
    
    if (empty($_POST['username']) || empty($_POST['password'])) {
        exit('Please fill both the username and password fields!');
    }

    if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
        // Bind the username parameter.
        $stmt->bind_param('s', $_POST['username']);
        // Execute the statement.
        $stmt->execute();
        // Store the result.
        $stmt->store_result();

        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            // Fetch the result.
            $stmt->fetch();

            // Verify the password.
            if (password_verify($_POST['password'], $password)) {
                $_SESSION['flash'] = ['message' => 'Welcome back, ' . htmlentities($_POST['username']) . '!', 'type' => 'success'];
                header('Location: index.php');
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $id;
                // Redirect to the home page.
                
            
               
                exit;
            } else {
                // Incorrect password.
                echo 'Incorrect username and/or password!';
            }
        } else {
          
            echo 'Incorrect username and/or password!';
        }

        
        $stmt->close();
    }


}
?>


