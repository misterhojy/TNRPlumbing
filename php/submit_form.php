<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = '7\)\&\:Bravo79\)';
$dbname = "plumbing_web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$subject = $_POST['subInput'];
$message = $_POST['messageInput'];

// Sanitize the data (optional)
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$telephone = mysqli_real_escape_string($conn, $telephone);
$subject = mysqli_real_escape_string($conn, $subject);
$message = mysqli_real_escape_string($conn, $message);

// Insert the data into the database
$sql = "INSERT INTO form_submissions (name, email, telephone, subject, message) VALUES ('$name', '$email', '$telephone', '$subject', '$message')";

if ($conn->query($sql) === true) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
