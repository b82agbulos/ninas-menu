<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    // Add any other form fields you need to process

    $to = "b82agbulos@gmail.com;
    $subject = "New Order Request";
    $message = "You have received a new order request from:\n\nName: $name\nEmail: $email\nPhone: $phone\n\n"; // Add other form field data to the message

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Your order request has been submitted. Thank you!";
    } else {
        echo "There was an error submitting your order request. Please try again.";
    }
}
?>