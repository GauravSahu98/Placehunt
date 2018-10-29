<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1; 
    echo "1st";                                // Enable verbose debug output
    $mail->isSMTP();
    echo "2nd" ;                                     // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";
    echo "3rd";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;  
    echo "4th" ;                            // Enable SMTP authentication
    $mail->Username = "anurag.shelar100@gmail.com"; 
    echo "5th" ;               // SMTP username
    $mail->Password = "Anurag@1000";  
    echo "6th" ;                        // SMTP password
    $mail->SMTPSecure = 'tls';
    echo "7th";                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    echo "8th";                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('anurag.shelar100@gmail.com', 'Anurag');
    $mail->addAddress('anurag.shelar100@gmail.com');     // Add a recipient
   

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}