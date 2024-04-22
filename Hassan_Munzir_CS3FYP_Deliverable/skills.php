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
    if (!empty($_POST['skills'])) {
        // Assuming accounts_id is stored in the session
        $accounts_id = $_SESSION['id'] ?? null;

        // Check if accounts_id is available
        if ($accounts_id === null) {
            exit('Session is not set with account ID.');
        }

        // Prepare the INSERT statement
        $stmt = $con->prepare('INSERT INTO skills (skill,accounts_id) VALUES (?, ?)');
        // Bind parameters to the query
        $stmt->bind_param('si', $_POST['skills'], $accounts_id);

        // Execute the statement
        if ($stmt->execute()) {
            echo 'Success: The skill has been added.';
        } else {
            echo 'Error: ' . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo 'Please fill in all required fields.';
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Handle GET request for qualifications data
    $accounts_id = $_SESSION['id'] ?? null; // Replace 'id' with the actual session variable name
    
    // Check if accounts_id is available
    if ($accounts_id === null) {
        exit('Session is not set with account ID.');
    }
    
    // Prepare the SELECT statement with a WHERE clause to filter by accounts_id
    $stmt = $con->prepare('SELECT * FROM `skills` WHERE accounts_id = ? ORDER BY date_added DESC LIMIT 5');
    $stmt->bind_param('i', $accounts_id);
    
    // Execute the statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $skillData = [];
        while ($row = $result->fetch_assoc()) {
            $skillData[] = $row;
        }
        echo json_encode($skillData);
    } else {
        echo 'Error: ' . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}

// Close MySQL connection
mysqli_close($con);
?>
