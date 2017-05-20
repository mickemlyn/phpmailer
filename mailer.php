<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$sender = $_POST['cf_email'];
$message = $_POST['cf_message'];
$subject = $_POST['cf_name'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'loconsultgroupweb@gmail.com';                 // SMTP username
$mail->Password = 'loconsult2016';
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // SMTP password


$mail->setFrom($sender, $sender);
$mail->addAddress('info@loconsultgroup.com', 'Loconsult Group Limited');     // Add a recipient
// Name is optional


$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = 'No message sent.The above user did not type any message from the site.';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    ?>

    ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to info@loconsultgroup.com');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'index.html';
    </script>
    <?php
} else {
    echo 'Message has been sent';
    ?>
    <script language = "javascript" type = "text/javascript" >
        // Print a message
        alert('Message sent Successfully. We will contact you shortly. Thank you.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'index.html';
    </script>
    <?php
}?>