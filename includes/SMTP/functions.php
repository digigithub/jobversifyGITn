<?php
require("class.phpmailer.php");

function admin_mail($email_to,$subject,$message,$header,$attachments)
{  

	$mail = new PHPMailer();
	//$mail->IsSMTP();
	$mail->Host = "myassignmentservices.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->SMTPDebug = 0;
	$mail->Port = 465;
	$mail->Username = "info@myassignmentservices.com";
	$mail->Password = "VTx7U;HX,;n5";
	$mail->From = "info@myassignmentservices.com";
	$mail->FromName = "My Assignment Services";
	$email_to_arr = explode(',',$email_to);

	foreach ($email_to_arr as $email_to) {
	    $mail->AddAddress( trim($email_to) );       
	}

	//$mail->AddAddress($email_to);
	$mail->AddReplyTo('info@myassignmentservices.com');
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	//$mail->addCustomHeader('X-custom-header', $header);
	$mail->Body = $message;
	$path       = "upload/";
	//print_r($attachments);
	$i = 0;
	if(isset($attachments) && (!empty($attachments)))
	{
	foreach ($attachments as $value)
    {  
	   //$file_name  = "QUESTION-1-2.pdf";
	   $file_name  = $attachments[$i];
	    $mail->addAttachment($path.$file_name);
	    $i++;
    }
   }
	return $mail->Send();
	//echo 'hii'.$email_to; die;
}

function client_mail($email_to,$subject,$message,$header)
{
   
	$mail = new PHPMailer();
	//$mail->IsSMTP();
	$mail->Host = "myassignmentservices.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->SMTPDebug = 0;
	$mail->Port = 465;
	$mail->Username = "info@myassignmentservices.com";
	$mail->Password = "VTx7U;HX,;n5";
	$mail->From = "info@myassignmentservices.com";
	$mail->FromName = "My Assignment Services";
	$mail->AddAddress($email_to);
	$mail->AddReplyTo('help@myassignmentservices.com');
	$mail->IsHTML(true);
	$mail->Subject = $subject;
	$mail->addCustomHeader('X-custom-header', $header);
	$mail->Body = $message;
	//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
	$mail->Send();
	

}



?>