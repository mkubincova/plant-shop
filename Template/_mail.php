<?php 
include '../header.php';

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $email \nMessage: $message";
$recipient = "socialopossum@gmail.com";
$headers = "From: $email";
?>

<div class="mx-auto my-5 p-3 border rounded" style="max-width: 500px;">

    <?php
    if (!empty($email) && !empty($message)) {
        if (mail($recipient, $subject, $formcontent, $headers)) {
            echo "<h4 class='text-center primary-text'>Thank you for the message, we'll get back to you as soon as possible!</h4>";
        } else {
            echo "<h4 class='text-danger text-center'>Sorry, failed to send the email.</h4>";
            echo "<p>If you are running this on localhost, you need to configure it. Xampp configuration: https://www.codingnepalweb.com/configure-xampp-to-send-mail-from-localhost/</p>";
        }
    } else{
        echo "<h4 class='text-danger text-center'>Some required fields are missing...</h4>";
    }
    ?>

</div>

<?php include '../footer.php'; ?>


