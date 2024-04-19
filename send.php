<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){
    if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['matter'])){
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $matter = $_POST['matter'];

        if(!empty($email) && !empty($subject) && !empty($matter)){
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = ''; //add sender email address here
                $mail->Password = ''; //add Google App Password here
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom(''); //add sender email address here
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $matter;
                $mail->send();

                echo"
                <script>
                alert('E-mail Sent Successfully!');
                document.location.href = 'index.html';
                </script>
                ";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "One or more fields are empty.";
        }
    } else {
        echo "Form fields are not set.";
    }
}
?>
