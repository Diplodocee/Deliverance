<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subscribe = $_POST['subscribe']
		$audition = $_POST['audition']
		$from = $_POST['name']; 
		$to = 'ludwa.borra@gmail.com'; 
		$subject = 'Message for Deliverance ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message Would you like e-mails about Deliverance events:\n $message Would you like to audition:\n $message";
 
	
 
// If there are no errors, send the email

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	
?>
