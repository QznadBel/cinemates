<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if(!empty($_POST["send"]){
		$YourName = $_POST["YourName"];
		$YourEmail = $_POST["YourEmail"];
		$YourMessage = $_POST["YourMessage"];
		$toEmail = $_POST["yassineinfo800@gmail.com"];

		$mailHeaders = "Name: " . $YourName . 
		"\r\n Email: " . $YourEmail .
		"\r\n Your Message: " . $$YourMessage .
		"\r\n Email: " . $YourEmail . "\r\n"

		if(mail($toEmail, $YourName, $mailHeaders)){
			$message = "Your informations are received"
		}

	} 
	 ?>
<div class="contact-section">
        <h1>Contact Us</h1>
    <form class="content-form" action="index.html" action="post">
    	<input type="text" class="contact-form-text" placeholder="Your name" name="YourName">
    	<input type="email" class="contact-form-text" id="gmail" placeholder="Your email" name="YourEmail">
    	<textarea class="contact-form-text" placeholder="Your message" name="YourMessage"></textarea>
    	<input type="submit" class="contact-form-btn" value="Send" name="send">
    	<?php if(!empty($message)){?>
    </div>
	<?php } ?>
    </form>
</body>
</html>