<?php	
	if(empty($_POST['input_1499']) && strlen($_POST['input_1499']) == 0)
	{
		return false;
	}
	
	$input_1499 = $_POST['input_1499'];
	$selector1 = $_POST['selector1'];
	
	$to = 'promontorio.club@icloud.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1499: $input_1499 \nSelector1: $selector1 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: promontorio.club@icloud.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>