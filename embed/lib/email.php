<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    $config = parse_ini_file('php.ini' , true);
    $from_mail = $config['mail']['from_mail'] ;
    $to_mail = $config['mail']['to_mail'];
    $mail_password = $config['mail']['mail_password'];


    $date_clicked = date('H:i:s Y-m-d');
    $mail = new PHPMailer(true);

        try {

        $mail->isSMTP();
        $mail->SMTPDebug = 0; // CHANGE BETWEEN 0 AND 4 TO SEE LESS OR MORE DETAIL
        $mail->Debugoutput = 'html';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
    
        $mail->Host = "smtp.mail.com"; // CHANGE ONLY THIS LINE PER EMAIL PROVIDER
        $mail->Port = 587;
        $mail->Username = $from_mail;
        $mail->Password = $mail_password;
        $mail->setFrom($from_mail, 'Form Submission');
        $mail->addAddress($to_mail, 'Site Director');
        
        $mail->isHTML(true);
        $mail->Subject = 'LSBU Family Law Hub Application';
        // CHANGE BODY VARIABLE TO EDIT EMAIL RECEIVED BY SITE DIRECTOR
        $mail->Body    = '<div style="font-family: \'Arial\', sans-serif;"><h1>A client has recently submitted a form.</h1><p> A form was submitted at ' . $date_clicked . ' (UTC+0). Click <a href="#" alt="Admin Dashboard">here</a> to view details and assign the case to your students.</p></div><body>';
        // CHANGE ALTBODY VARIABLR FOR IF SPAM DETECTOR PREVENTS HTML FORMATTING
        $mail->AltBody = 'A client has recently submitted a form. This form was submitted at ' . $date_clicked . ' (UTC+0). Visit your dashboard to view details and assign the case to your students.';

    $mail->send();
    echo ' ';
} catch (Exception $e) {
    echo ' ', $mail->ErrorInfo;
}
?>
   