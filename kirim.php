<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";



 $mail = new PHPMailer;

 //Enable SMTP debugging. 

 $mail->SMTPDebug = 3;  //nonaktifkan debug                             

 //Set PHPMailer to use SMTP.

 $mail->isSMTP();            

 //Set SMTP host name                          

 $mail->Host = "server.mailhost.com"; //host mail server (sesuaikan dengan mail hosting Anda)

 //Set this to true if SMTP host requires authentication to send email

 $mail->SMTPAuth = true;                          

 //Provide username and password     

 $mail->Username = "email-email@mailhost.com";   //nama-email smtp              

 $mail->Password = "password-email";           //password email smtp                

 //If SMTP requires TLS encryption then set it

 $mail->SMTPSecure = "ssl";                           

 //Set TCP port to connect to 

 $mail->Port = 465;                                   


 $mail->From = "email-pengirim@gmail.com"; //email pengirim

 $mail->FromName = "Ini adalah PHPmailer"; //nama pengirim

 $mail->addAddress("email-penerima@gmail.com", "nama penerima");

 $mail->isHTML(true);


 $mail->Subject = "PHP Mailer Indonesia";

        $mail->Body = "<i>Kemudian daripada itu untuk membentuk suatu pemerintah negara Indonesia yang melindungi segenap bangsa Indonesia dan seluruh tumpah darah Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan bangsa, dan ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan, perdamaian abadi dan keadilan</i>"; //isi email

        $mail->AltBody = "PHP mailer"; //body email


 if(!$mail->send()) 

 {
     echo "Mailer Error: " . $mail->ErrorInfo;
 } 
 else 
 {
     echo "Message has been sent successfully";
 }

?>
