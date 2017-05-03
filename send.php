<?php
$full_name = $_POST ['full_name'];
$email = $_POST ['email'];
$title = $_POST ['title'];
$message = $_POST ['message'];
$to = "mathewthomason@outlook.com
$subject = "New Inquiry"

mail ($to, $subject, $message, "From " . $full_name . $email);

echo '<script type="text/javascript">',
     'alert("Your message has been sent! We will get back with in 24-48 hours. Press Ok to return to the home page and confirm your submission.");',
     '</script>';
echo '<script type="text/javascript">',
          'window.location.replace("http://www.iqnetworks.co");',
          '</script>';

?>
