<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'localhost';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = false;    
    $mail->SMTPSecure = false;// Enable SMTP authentication
    //$mail->Username   = 'digitalchetan85@gmail.com';                     // SMTP username
   // $mail->Password   = 'csipmdjhoniovkxq';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('digitalchetan85@gmail.com', 'DC');
    $mail->addAddress('chetankumar.nv@gmail.com', 'Chetan Kumar N');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Enquiry Details';
        $mail->Body    = '<html><body>';
        $mail->Body   .= '<table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">';
        $mail->Body   .= "<tr style='background: #eee;'><td><strong>Online Enquery:</strong> </td><td>" . 'Free Councelling University Page' . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Student Name:</strong> </td><td>" . strip_tags($_POST['university-student-name']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Parent Name:</strong> </td><td>" . strip_tags($_POST['university-parent-name']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['university-email']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['university-tel']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>City:</strong> </td><td>" . strip_tags($_POST['university-city']) . "</td></tr>";
        $mail->Body   .= "<tr><td><strong>NEET Score:</strong> </td><td>" . strip_tags($_POST['university-neet']) . "</td></tr>";
        $mail->Body   .= "</table>";
        $mail->Body   .= "</body></html>";

    $mail->send();
    echo "<p class='text-center text-success'><strong>Thanks for contacting us. We will reach you soon.</strong></p>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}