<?php
$servername = "sqlXXX.epizy.com";  
$username = "epiz_12345678";       
$password = "your_password";       
$database = "epiz_12345678_portfolio_db"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Thank you for contacting us!</h2>";
    echo "<p>Your message has been received.</p>";
} else {
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);
?>
