<?php

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@scandicroot.com';
    $mail->Password = 'fbhtxbblsmrdyfyo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
            $firstname = $_POST['form_name'];
            $phone = $_POST['form_phone'];
            $email = $_POST['form_email'];
            $subject = $_POST['form_subject'];
            $message = $_POST['form_message'];

            $mail->setFrom('info@scandicroot.com');
            $mail->addAddress('info@scandicroot.com');
            $mail->isHTML(true);
            $mail->Subject = 'Scandic Roots - Enquiries';

            $htmlContent = '<img src="https://scandicroot.com/assets/images/resources/sticky-logo.png">
        <h3 style="color:#ecb3a0;">SCANDIC ROOTS ENQUIRIES</h3>
        <table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
        <tr>
            <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Name</td>
            <td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
        </tr>
        <tr style="background-color: #f2f2f2;">
            <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
            <td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
            <td style="border: 1px solid #ddd;padding: 8px;">' . $email . '</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Subject</td>
            <td style="border: 1px solid #ddd;padding: 8px;">' . $subject . '</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
            <td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
        </tr>
        </table>';

            $mail->Body = $htmlContent;

            $mail->send();
            header('Location: https://scandicroot.com/Thankyou.html');

        } 
    
?>