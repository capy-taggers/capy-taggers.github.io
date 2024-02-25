<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $appeal = $_POST['appeal'];

    // Your email address where the appeal will be sent
    $to = "yesyesno005@gmail.com";

    // Subject of the email
    $subject = "Appeal from $name";

    // Message body
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Appeal:\n$appeal";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or any other page after submission
    header("Location: thank_you.html");
}
?>
