<?php
// Database credentials
$servername = "sqlXXX.epizy.com";  // Replace with your database host
$username = "epiz_12345678";       // Replace with your actual username
$password = "your_password";       // Replace with your actual password
$database = "epiz_12345678_portfolio_db"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize inputs
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insert into database
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Thank you for contacting us!</h2>";
    echo "<p>Your message has been received.</p>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
