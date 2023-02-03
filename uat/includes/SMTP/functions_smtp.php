<?php
require("class.phpmailer.php");

function admin_mail($email_to,$subject,$message,$header,$attachments,$from_name=NULL,$from_email=NULL)
{  
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "jobversify.com"; // Your SMTP PArameter
    $mail->Port = 465; // Your Outgoing Port
    $mail->SMTPAuth = true; // This Must Be True
    $mail->Username = "info@jobversify.com"; // Your Email Address
    $mail->Password = "#NOsryC=8iZz"; // Your Password
    $mail->SMTPSecure = 'ssl'; // Check Your Server's Connections for TLS or SSL
    $mail->From = "info@jobversify.com";
    $mail->AddBCC("leads.digiversal@gmail.com", "New Lead");
    if($from_name != '')
    {
        $mail->FromName = $from_name;
    }
    else
    {
       $mail->FromName = 'jobversify'; 
    }
    
    if($from_email != '')
    {
        $mail->AddReplyTo($from_email);
    }
    
    
    $email_to_arr = explode(',',$email_to);

    foreach ($email_to_arr as $email_to) {
        $mail->AddAddress( trim($email_to) );       
    }
    
    //$mail->AddAddress($email_to);

    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $message;
    $path       = "uploads/";
	//print_r($attachments);
	$i = 0;
	if(isset($attachments) && (!empty($attachments)))
	{
	foreach ($attachments as $value)
    {  
	    $file_name  = $attachments[$i];
	    $mail->addAttachment($path.$file_name);
	    $i++;
    }
   }
    if(!$mail->Send())
    {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else{
    	return true;
    }
    
}

function client_mail($email_to,$subject,$message)
{
 
    $mail = new PHPMailer();
    $mail->IsSMTP();
     $mail->Host = "jobversify.com"; // Your SMTP PArameter
    $mail->Port = 465; // Your Outgoing Port
    $mail->SMTPAuth = true; // This Must Be True
    $mail->Username = "info@jobversify.com"; // Your Email Address
    $mail->Password = "#NOsryC=8iZz"; // Your Password
    $mail->SMTPSecure = 'ssl'; // Check Your Server's Connections for TLS or SSL
    $mail->From = "info@jobversify.com";
    $mail->FromName = 'JobVersify';
    $mail->AddAddress($email_to);
    $mail->AddReplyTo('info@jobversify.com');
    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $message;
   
    if(!$mail->Send())
    {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
     else{
    	return true;
    }
}
?>