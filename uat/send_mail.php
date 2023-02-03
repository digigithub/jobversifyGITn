<?php
$Ip = $_SERVER['REMOTE_ADDR'];
$page_url = $_SERVER['HTTP_REFERER'];

include('includes/SMTP/functions_smtp.php');
date_default_timezone_set('Asia/Calcutta');
error_reporting(0);
@extract($_POST);
/*----------- for email capture in db end ------------*/
define('SITE_NAME','JobVersify');

if($action=="send")
{      


    foreach($_FILES["att_file"]["tmp_name"] as $key=>$tmp_name) {
        $temp = $_FILES["att_file"]["tmp_name"][$key];
        $actualName = $_FILES["att_file"]["name"][$key];
        $file_name = time().$_FILES["att_file"]["name"][$key];
        if(empty($temp))
            break;
        else 
            $fileupload = true;
        copy($temp,"uploads/".$file_name);  
        $uploaded_files[]=$file_name;  // variable for email attachments

    }
  
    #Saving data to DM ends
   
    $mail_subject   = 'New Enquiry Received at '.SITE_NAME.' - '.$email;
    $email_to ="info@jobversify.com"; 
    $email_to ="debug.digiversal@gmail.com"; 
    $from = "info@jobversify.com"; 

    $message="<center><b><u>New Enquiry Received at ".SITE_NAME."</u></b></center><br><br>";
    $message  .="<b><u>Enquiry Details</u></b><br><br>";

    $message  .='<table border="1" style="border-collapse:collapse; width: 660px;margin: 20px 0; " cellpadding="10" ><tbody>';
    $message  .='<tr><td colspan="2" style="background:#f1f1f1;"><h3 style="margin: 0px 0;font-size: 17px;">Contact Detail</h3></td></tr>';
    $message  .='<tr><td>Name :</td><td>'.$_REQUEST['name'].'</td></tr>';
    $message  .='<tr ><td>Email :</td><td>'.$email.'</td></tr>';
    $message  .='<tr><td>Phone :</td><td>'.$mobile.'</td></tr>';
     $message  .='<tr ><td>Company :</td><td>'.$company.'</td></tr>';
    $message  .='<tr><td>Position :</td><td>'.$position.'</td></tr>';
    $message  .='</tbody></table>';
    $message  .='<table border="1" style="border-collapse:collapse;width: 660px;margin: 20px 0; " cellpadding="10" ><tbody>';
    $message  .='<tr ><td colspan="2" style="background:#f1f1f1;"><h3 style="margin: 0px 0;font-size: 17px;"> Additional Detail</h3></td></tr>';
   
    $message  .='<tr ><td>Page :</td><td>'.$page_url.'</td></tr>';
    $message  .='</tbody></table>';
    #IP and sender Ip Start 
    $message  .='<table border="1" style="border-collapse:collapse;width: 660px;margin: 20px 0; " cellpadding="10" ><tbody>';
    $message  .='<tr><td>IP :</td><td>'.$_SERVER['REMOTE_ADDR'].'</td></tr>';
    $message  .='<tr ><td>User Agent :</td><td>'.$_SERVER['HTTP_USER_AGENT'].'</td></tr>';
    $message  .='</tbody></table>';

    #IP and sender Ip Start 
    $headers = "From: <$from>";

    #------------ for send admin mail using SMTP start-------------

    admin_mail($email_to,$mail_subject,$message,$headers,$uploaded_files,$name,$email);
    #------------- for send admin mail using SMTP close--------------

   
$Subject1 = 'Thank you for contact us!';
$Msg1     = '<body style="background: #f6f6f6;">
          <table style="border: 4px solid #efefef;border-collapse: collapse; width: 660px; margin: 0 auto; background: #fff;font-family: sans-serif;">
            <tbody>
              <tr style="background: #fff;">
                <td style="margin-bottom: 10px;">
                  <table style="width: 100%;padding-bottom: 10px;">
                    <tbody><tr>
                      <td style="text-align: left;padding: 5px 0;">
                        <a style="padding: 0px 10px;display: block;" href="https://www.jobversify.com/uat/"><img style="width: 200px;" src="http://www.jobversify.com/uat/img/logo.png">
                      </a></td>
                      <td style="vertical-align: middle;text-align: right;">
                        <p style="margin: 0;padding: 0 10px 0 0;">
                          <a style="text-decoration: none;display: block;margin: 0 0 5px;font-size: 17px;color: #002e5b;font-weight: normal;" href="mailto:info@jobversify.com">
                         info@jobversify.com </a>
                        </p>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td style="padding: 30px 0;background: #002e5b;text-align: center;"><h2 style="margin: 0;color: #fff;font-weight: 500; font-size: 25px;">Greetings from JobVersify!</h2></td>
              </tr>
              <tr>
                <td style="padding: 30px 30px 20px;">
                  <h3 style="margin: 0;">Dear '.$name.',</h3>
                  <p style="margin: 20px 0;font-size: 14px;color: #565656;">Thank you for contact us. Keep your requirements close by because wherever you are, we will call you. And we will help you. </p>
                </td>
              </tr>
              <tr>
                <td style="padding: 20px 30px;background: #efefef;">
                  <p style="margin: 0;line-height: normal;font-size: 15px;">
                    <span style="font-size: 18px;color: #002e5b;font-weight: 700;">Best Regards,</span> <br>
                    <span style="font-size: 12px;margin: 5px 0;display: inline-block;color: #565656;line-height: 22px;">JobVersify </span> <br>
                    <span style="font-size: 13px;margin: 3px 0;display: inline-block;color: #565656;"><strong>Email</strong>: info@jobversify.com</span> <br>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </body>';
//=========================================== clinet mail starts ================================== 
    client_mail($email,$Subject1,$Msg1);
}

?>