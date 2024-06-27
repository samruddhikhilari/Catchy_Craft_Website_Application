<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email=$_POST['email'];

$cont = new mysqli("localhost", "root", "", "CachyCraft"); 

if ($cont === false) { 
	die("ERROR: Could not connect. ".$cont->connect_error); 
} 

$sql = "INSERT INTO Email_Register (email) 
			VALUES('$email') "; 
	if ($cont->query($sql) === true) 
        { 

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
    $mail->setFrom('samruddhikhilari630@gmail.com', 'Catchy Craft Welcome');
    $mail->addAddress($email, 'Catchy Craft');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'CachyCraft Entry Registeration ';
    $mail->Body    = 'Welcome to catchy craft user.....!  here you will find exclusive products with quality and affordness with AR technology service :) we are Happy to connect with your see you again !</b>';

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
}
?>
<script language="javascript">
    alert("Register successfully done.");
</script>
<?php
// Close connection 
$cont->close(); 
?> 