<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$to = "recipient@example.com";
	$subject = "New message from $name";
	$body = "From: $name\nEmail: $email\nMessage:\n$message";
	
	if (mail($to, $subject, $body)) {
		echo "<p>Thank you for your message, $name! We will be in touch shortly.</p>";
	} else {
		echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
	}
?>
