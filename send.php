<?php
$full_name = $_POST ['full_name'];
$email = $_POST ['email'];
$title = $_POST ['title'];
$message = $_POST ['message'];
$to = "mathewthomason@outlook.com
$subject = "New Inquiry"

mail ($to, $subject, $message, "From " . $full_name . $email);

alert("Thanks for filling out a contact fourm. You will be contacted within 24-48 hours. This page will now redirect to the home page.");
window.location = "http://iqnetworks.us";

?>