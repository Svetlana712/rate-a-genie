<?php

	// get the posted data
	$email = $_POST['email'];	


			
	// write the email content
	$email_content .= "Email: $email\n";
		
	// send to email
	mail ("webpetrash@gmail.com", "WP Sites application", $email_content);

?>