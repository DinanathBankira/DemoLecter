<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    // Sanitize input
    $name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $email=filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
    $message=filter_var(trim($_POST['message']),FILTER_SANITIZE_STRING);

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Process form data
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Message: " . htmlspecialchars($message) . "<br>";
    }
} else {
    echo "Invalid request method.";
}


?>