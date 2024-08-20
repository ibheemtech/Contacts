<?php
SESSION_START();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['submitcontact']))
{
$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
   
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ibheemtech@gmail.com';                     //SMTP username
    $mail->Password   = 'gebpxfgrndkwqmic';                               //SMTP password
   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //ENCRYPTION_SMTPS Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ibheemtech@gmail.com', 'ibheemtech');
    $mail->addAddress('ibheemtech@gmail.com', 'ibheemtech');     //Add a recipient
   

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'ibheemtech';
    $mail->Body    = '<h3> hello,you got a new enquiry</h3>
    <h4>name: '.$name.'</h4>
    <h4>email:'.$email.'</h4>
    <h4>subject:'.$subject.'</h4>
    <h4>comment:'.$comment.'</h4>  
    ';
     if( $mail->send())
     {
        $_SESSION['status'] = "thank you contact us - IBHEEMTECH";
        header("location:{$_SERVER["HTTP_REFERER"]}");
        exit(0);
     }else
     {
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header('location: index.php');
    exit(0);
     }
  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else
{
    header('location: index.php');
    exit(0);
}
?>