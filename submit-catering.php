<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    // Add any other form fields you need to process

    $to = "b82agbulos@gmail.com";
    $subject = "New Catering Request";
    $message = "You have received a new catering request from:\n\nName: $name\nEmail: $email\nPhone: $phone\n\n"; // Add other form field data to the message

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Your catering request has been submitted. Thank you!";
    } else {
        echo "There was an error submitting your catering request. Please try again.";
    }
}
?>