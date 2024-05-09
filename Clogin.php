<?php


$hostname = '****'; // Database hostname
$username = '****';               // MySQL username
$password = '****';           // MySQL password
$database = '****';             // Database name

// Create a MySQLi database connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Function to sanitize user input
function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}

// Check if username and password are posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted username and password
    $postedUsername2 = hash('sha256', $_POST['username']);
    $postedPassword2 = hash('sha256', $_POST['password']);
    $postedUsername = sanitize_input($postedUsername2);
    $postedPassword = sanitize_input($postedPassword2);

    //

    // Query the database to check if the username and password match
    $query = "SELECT * FROM Carer WHERE username = '$postedUsername' AND password = '$postedPassword'";
    $result = $mysqli->query($query);

    // Check if the query was successful and if any rows were returned
    if ($result && $result->num_rows > 0) {
        // Authentication successful, redirect to some secure page
        header("Location: carer-hb.html");
        exit;
    } else {
        // Authentication failed, display error message and redirect back to login page with error
        header("Location: Cindexerr.html?error=1");
        exit;
    }
}

// Close the connection
$mysqli->close();
?>



