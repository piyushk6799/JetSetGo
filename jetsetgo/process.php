<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["fullname"];
    $activities = $_POST["activities"];
    $destination = $_POST["destination"];
    $date = $_POST["date-start"];

    // Set recipient email address
    $to = "piyushkulkarilm@gmail.com";

    // Set email subject
    $subject = "New Trip Booking Request";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Activities: $activities\n";
    $message .= "Destination: $destination\n";
    $message .= "Date Travel: $date\n";

    // Send the email
    mail($to, $subject, $message);
    header("Location: index.html");
    exit;
}
?>
