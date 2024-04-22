<?php
session_start();

// Database connection info
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

// Connect to MySQL
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// POST request handling for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields are set and not empty
    if (!empty($_POST['company']) && !empty($_POST['datefrom']) && !empty($_POST['dateto']) && !empty($_POST['role']) && isset($_POST['experience'])) {
        // Assuming accounts_id is stored in the session
        $accounts_id = $_SESSION['id'] ?? null;

        // Check if accounts_id is available
        if ($accounts_id === null) {
            exit('Session is not set with account ID.');
        }

        // Prepare the INSERT statement
        $stmt = $con->prepare('INSERT INTO experience (Company, dateFrom, dateTo, role, experience, accounts_id) VALUES (?, ?, ?, ?, ?, ?)');
        // Bind parameters to the query
        $stmt->bind_param('sssssi', $_POST['company'], $_POST['datefrom'], $_POST['dateto'], $_POST['role'], $_POST['experience'], $accounts_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo 'Success: The experience has been added.';
        } else {
            echo 'Error: ' . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo 'Please fill in all required fields.';
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Handle GET request for experience data
    $accounts_id = $_SESSION['id'] ?? null; // Replace 'id' with the actual session variable name
    
    // Check if accounts_id is available
    if ($accounts_id === null) {
        exit('Session is not set with account ID.');
    }
    
    // Prepare the SELECT statement with a WHERE clause to filter by accounts_id and ORDER BY date_added DESC
    $stmt = $con->prepare('SELECT * FROM experience WHERE accounts_id = ? ORDER BY date_added DESC LIMIT 5');
    $stmt->bind_param('i', $accounts_id);
    
    // Execute the statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $experienceData = [];
        while ($row = $result->fetch_assoc()) {
            $experienceData[] = $row;
        }
        echo json_encode($experienceData);
    } else {
        echo 'Error: ' . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}

// Close MySQL connection
mysqli_close($con);
?>
