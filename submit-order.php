<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $order = $_POST['order'];
    $pickup_date = $_POST['pickup-date'];
    $pickup_time = $_POST['pickup-time'];
    $comments = $_POST['comments'];

    // Set up email
    $to = "orders@example.com"; // Replace with your email address
    $subject = "New Order from Nina's Menu";
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Address: " . $address . "\n";
    $message .= "Order: " . $order . "\n";
    $message .= "Pickup Date: " . $pickup_date . "\n";
    $message .= "Pickup Time: " . $pickup_time . "\n";
    $message .= "Comments: " . $comments;

    // Set additional email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your order has been submitted! We will get back to you shortly.";
    } else {
        echo "There was an error sending your order. Please try again.";
    }
} else {
    // Redirect to the order form if the form wasn't submitted
    header("Location: order-form.html");
    exit();
}
?>