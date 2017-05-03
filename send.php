<?php
$full_name = $_POST ['full_name'];
$email = $_POST ['email'];
$title = $_POST ['title'];
$message = $_POST ['message'];
$to = "mathewthomason@outlook.com
$subject = "New Inquiry"

mail ($to, $subject, $message, "From " . $full_name . $email);


?>