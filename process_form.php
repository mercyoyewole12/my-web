<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Sanitize the email address
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    
    $additional_info = $_POST["additional_info"];

    
    $to = "mercyoyewole48@gmail.com";

    
    $subject = "User Information";

    
    $message = "Email Address: $email\nAdditional Info: $additional_info";

    
    if (mail($to, $subject, $message)) {
        echo "Thank you for submitting your information!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
