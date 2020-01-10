<?php
    session_start();
    $email=$_POST['email'];
    $_SESSION['email'] =$_POST['email'];
    'http://localhost/example/projects/Site/ForgotPwd.php';

    $mail="<h1 style='color:red;'>SINGER<span style='color:blue;font-size:25px;'>Service</span></h1>
          <p style= 'border: 3px solid powderblue;padding:20px;width: 450px'>
          <span style='font-size:18px;font-weight:bold;'>
          Please click on the link below to reset your singer service password
          </span><br></br>
          <span style='font-size:18px;'>http://localhost/example/projects/Site/ForgotPwd.php</span></p>";
      
      sendMail($email,"SINGER Service",$mail);
    
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