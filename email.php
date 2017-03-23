<?php

$subject = 'New Review Submitted';
$send_to = "email@example.com";

$rating = $_REQUEST['rating'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$review = $_REQUEST['review'];

$message = "Name: " . $name . "\n";
$message .= "Rating: " . $rating . "\n\n";
$message .= "Review: \n" . $review;

//send email
mail($send_to, "$subject", $message, "From:" . $email);

//Email response
echo "Thank you for your review";

?>