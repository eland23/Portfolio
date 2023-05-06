<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "landaver@kean.edu";
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from $name.\n\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    if(mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you soon.";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}

?>
                                                                                                                                      