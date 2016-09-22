
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'cahndrew@gmail.com;
$subject = $_POST['subject'];
$human = $_POST['human'];

$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit'] && $human == '15') {
    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent!</p>';
    }
}
?>
