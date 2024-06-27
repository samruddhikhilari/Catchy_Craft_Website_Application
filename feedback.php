<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$femail=$_POST['email'];
$fcoun=$_POST['country'];
$fsub=$_POST['subject'];

$cont = new mysqli("localhost", "root", "", "CachyCraft"); 

if ($cont === false) { 
	die("ERROR: Could not connect. ".$cont->connect_error); 
} 

$sql = "INSERT INTO feedback (firstname,lastname,email,country,subject) 
			VALUES('$fname','$lname','$femail','$fcoun','$fsub') "; 
	if ($cont->query($sql) === true) 
{ 
	echo "Feedback Transmitted successfully.";
} 
else
{ 
	echo "ERROR: Could not able to execute $sql. "
		.$cont->error; 
} 

//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'samruddhikhilari630@gmail.com';                     //SMTP username
    $mail->Password   = 'ajdq mppi idgi ragt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('samruddhikhilari630@gmail.com','Catchy Craft');
    $mail->addAddress($femail,'Feedback Form' );     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Feedback From Customer";
    $mail->Body = "Thanku for your mindful feedback : = ".$fsub;

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// Close connection 
$cont->close(); 
?> 