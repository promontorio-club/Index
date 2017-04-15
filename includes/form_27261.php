<?php	
	
	
	$input_81 = $_POST['input_81'];
	$input_877 = $_POST['input_877'];
	$input_539 = $_POST['input_539'];
	
	$to = 'promontorio.club@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Input_81: $input_81 \nInput_877: $input_877 \nInput_539: $input_539 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: promontorio.club@icloud.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>