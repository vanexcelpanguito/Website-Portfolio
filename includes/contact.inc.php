<?php
require '../email/PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['name'])){
	include_once 'database.inc.php';

	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$company = mysqli_real_escape_string($connect, $_POST['company']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$address = mysqli_real_escape_string($connect, $_POST['address']);
	$message = mysqli_real_escape_string($connect, $_POST['message']);

	/* check for empty fields */
	if (empty($name) || empty($company) || empty($email) || empty($address) || empty($message)){
		header("Location: ../contact.php?signup-failed-empty-field");
		exit();
	}else{
		/*check for invalid characters*/
		if (!preg_match("/^[a-zA-Z]*$/", $name)){
				header("Location: ../contact.php?invalid-characters");
				exit();
		}
			else{
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
							header("Location: ../contact.php?invalid-email");
							exit();
				}
					else{
					//insert into the database
						$sql = "INSERT INTO messages (msg_name, msg_company, msg_email, msg_address, msg_message) VALUES ('$name', '$company', '$email', '$address', '$message');";
						mysqli_query($connect, $sql);

						//Create a new PHPMailer instance
						$mail = new PHPMailer;

						//Tell PHPMailer to use SMTP
						$mail->isSMTP();

						//Enable SMTP debugging
						// 0 = off (for production use)
						// 1 = client messages
						// 2 = client and server messages
						//$mail->SMTPDebug = 2;

						//Ask for HTML-friendly debug output
						$mail->Debugoutput = 'html';

						//Set the hostname of the mail server
						$mail->Host = 'tls://smtp.gmail.com:587';//tls://smtp.gmail.com:587 / ssl://smtp.gmail.com:465
						// use
						// $mail->Host = gethostbyname('smtp.gmail.com');
						// if your network does not support SMTP over IPv6

						//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
						$mail->Port = 587;//465/587

						//Set the encryption system to use - ssl (deprecated) or tls
						$mail->SMTPSecure = 'tls';//ssl/tls

						$mail->SMTPOptions = array(
						    'ssl' => array(
						        'verify_peer' => false,
						        'verify_peer_name' => false,
						        'allow_self_signed' => true
						    )
						);

						//Whether to use SMTP authentication
						$mail->SMTPAuth = true;

						//Username to use for SMTP authentication - use full email address for gmail
						$mail->Username = "vanexcelpanguito@gmail.com";

						//Password to use for SMTP authentication
						$mail->Password = "dzxfzmzzscogtjim";

						//Set who the message is to be sent from
						$mail->setFrom($email, $company);

						//Set an alternative reply-to address
						$mail->addReplyTo($email, $company);

						//Set who the message is to be sent to
						$mail->addAddress('rachelaralar8@gmail.com', 'Van Doe');

						//Set the subject line
						$mail->Subject = 'test2';

						$mail->Body = $message;

						//Read an HTML message body from an external file, convert referenced images to embedded,
						//convert HTML into a basic plain-text alternative body
						//$mail->msgHTML(file_get_contents('../email/PHPMailer/examples/contents.html'), dirname(__FILE__));

						//Replace the plain text body with one created manually
						$mail->AltBody = 'This is a plain-text message body';

						//Attach an image file
						$mail->addAttachment('../email/PHPMailer/examples/images/phpmailer_mini.png');

						//send the message, check for errors
						if (!$mail->send()) {
						    echo "Mailer Error: " . $mail->ErrorInfo;
						} else {
						    echo "Message sent!";
						    //Section 2: IMAP
						    //Uncomment these to save your message in the 'Sent Mail' folder.
						    #if (save_mail($mail)) {
						    #    echo "Message saved!";
						    #}
								header("Location: ../contact.php?Message successfully sent");
								exit();
						}

						// header("Location: ../contact.php?Message successfully sent");
						// exit();
					}
			}
	}
}else{
	header("Location: ../contact.php?=Message Sent");
	exit();
}






?>
