
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Druhs portfolio;
    $to = 'cahndrew@gmail.com';
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
  if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';

    /* Anything that goes in here is only performed if the form is submitted */
}
?>


