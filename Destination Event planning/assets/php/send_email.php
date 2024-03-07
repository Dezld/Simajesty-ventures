<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email recipient
    $to = "desmondalfred2002.com"; // Replace with your email address

    // Email subject
    $subject = "New Contact Form Submission";

    // Email message
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the request method is not POST, redirect to the form page
    header("Location: contact_form.html");
}
?>
