<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function sendMail($email,$subject,$content){
        //........................................
        // Use below lines for including PHPMailer in case of normal PHP Script only
        require 'vendor/phpmailer/phpmailer/src/Exception.php';
        require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require 'vendor/phpmailer/phpmailer/src/SMTP.php';
        //....................................
        $mail = new PHPMailer(true);
        try
        {
            // use below mail sever settings in case of Sending email with PHPMailer and GMAIL
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = "ssl";
            $mail->Mailer   = "smtp";
            $mail->Host = 'tls://smtp.gmail.com:587';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Username = "singerservice1@gmail.com";
            $mail->Password = "Singer@123";

            //........................................................

            // mail creation details
            $mail->SetFrom("singerservice1@gmail.com", "{$subject}");
            $mail->AddAddress("{$email}", "{$subject}");
            /*$mail->AddAddress("recievers email", "{$subject} for {$email}");*/
            $mail->AddReplyTo("{$email}", "{$subject}");
            /*$mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');
            $mail->addAttachment('/var/tmp/file.tar.gz');
            $mail->setLanguage('fr', '/optional/path/to/language/directory/');*/

            //Content
            //$mail->Priority    = 1;
            //$mail->CharSet     = 'UTF-8';
            //$mail->ContentType = 'text/html; charset=utf-8\r\n';
            $mail->isHTML(true);
            $mail->Subject = "{$subject}";
            $body = "{$content}";
            $mail->MsgHTML($body);
            $mail->AltBody = strip_tags($body);
            $mail->WordWrap   = 80;

            $mail->send();
            $mail->SmtpClose();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>