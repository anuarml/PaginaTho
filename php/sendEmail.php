<?php
	require 'phpmailer/PHPMailerAutoload.php';
	/*$mail = new PHPMailer(); 
	$mail->IsSMTP(); // send via SMTP
	//IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "anuarml93@gmail.com"; // SMTP username
	$mail->Password = "alexandro12"; // SMTP password
	$webmaster_email = "anuarml93@gmail.com"; //Reply to this email ID
	$email="anuar.morales@tho.mx"; // Recipients email ID
	$name="Prueba Anuar"; // Recipient's name
	$mail->From = $webmaster_email;
	$mail->FromName = "Webmaster";
	$mail->AddAddress($email,$name);
	$mail->AddReplyTo($webmaster_email,"Webmaster");
	$mail->WordWrap = 50; // set word wrap
	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = "This is the subject";
	$mail->Body = "Hi,
	This is the HTML BODY "; //HTML Body
	$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
	if(!$mail->Send())
	{
	echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
	echo "Message has been sent";
	}*/
	$noSetData = 101;
	$failedMessageSent = 102;
	if (!empty($_POST["name"])) {
		$mail = new PHPMailer;
		//$mail->SMTPDebug = 2;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com;smtp.gmail.com';  	  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'portalweb@tho.mx';                 // SMTP username
		$mail->Password = 'Nieves2015$..';                    // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		$name = $_POST['name'];
	    $tomail = $_POST['tomail'];
		$mail->setFrom('portalweb@tho.mx', $name);
		$mail->addAddress($tomail);     // Add a recipient
		//$mail->addAddress('yussel.paredes@gmail.com', 'Yussel');               // Name is optional
		//$mail->addAddress('anuarml93@gmail.com'); 
		//$mail->addReplyTo('anuar.morales@tho.mx', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		$email = $_POST['email'];
	    $phone = $_POST['phone'];
		$subject = $_POST['subject'];
	    $message = $_POST['message'];
		/*$mail->Subject = 'Importante Yussel';
		$mail->Body    = 'Favor de pasar a mi <b>oficina!</b>';
		$mail->AltBody = 'Saludos';*/
		$mail->Subject = $subject;
		$mail->Body    = 'E-mail: '.$email.'<br>Telefono: '.$phone.'<br>Mensaje: <br>'.$message;
		$mail->AltBody = $message;

		if(!$mail->send()) {
		    //echo 'Message could not be sent.';
		    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		    echo $failedMessageSent;
		} else {
		    echo 'Message has been sent';
		}
	}else{
		//echo '<p>No estan seteadas las variables<p>';
		echo $noSetData;
	}


	/*if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["phone"]) && isset($_POST["tomail"]) && isset($_POST["subject"]) && isset($_POST["message"])) {*/
	/*if ($_POST['name']) {
		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");

	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $phone = $_POST['phone'];
	    $tomail = $_POST['tomail'];
	    $subject = $_POST['subject'];
	    $message = $_POST['message'];
	    $from = 'From: '.$email;
	    echo $from;
	    if (/*mail ($to, $subject, $body, $from)mail($tomail, $subject, "Mensaje de {$name}, Telefono: {$phone} \n {$message}", $from)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            //echo '<p>Something went wrong, go back and try again!</p>';
            echo false;
        }
	    //mail($tomail, $subject, "Mensaje de {$name}, Telefono: {$phone} \n {$message}", $from);
	    
	}else{  
	    echo false;
	}*/
	    //var_dump(mail("anuar.morales@tho.mx", "subject", "this is message ;)"));

 
		/*var_dump(mail("tom Sawyer <anuar.morales@tho.mx>", "subject", "this is message ;)", "From: Huck<anuarml93@gmail.com>"));*/
 

	    //echo $name;

	    // Input sanitation omitted

	    // Send the email
	    //mail($tomail, $subject, "Mensaje de {$name}, Email: {$email}, Telefono: {$phone} \n {$message}");
		
		/*$name = 'Tho';
		$email = 'anuarml93@gmail.com';
		$message = 'Prueba de email';
		$from = 'From: www.tho.com'; 
		$to = 'anuar.morales@tho.mx'; 
		$subject = 'Customer Inquiry';
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";*/

		/*$headers = 'From: anuarml93@gmail.com' . "\r\n" .
		'Reply-To: anuarml93@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html\r\n";*/
		

		//mail($to, $subject, $message);
	
?>