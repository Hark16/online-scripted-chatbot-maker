
<?php

require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)

    {

        $mail = new PHPMailer();

        $mail->IsSMTP();

        $mail->SMTPAuth = true; 

 

        $mail->SMTPSecure = 'ssl'; 

        $mail->Host = 'smtp.hostinger.in';

        $mail->Port = 587;  

        $mail->Username = 'connection@myprabandhak.com';

        $mail->Password = 'baba1504';   

 

   //   $path = 'reseller.pdf';

   //   $mail->AddAttachment($path);

 

        $mail->IsHTML(true);

        $mail->From= "connection@myprabandhak.com";

        $mail->FromName=$from_name;

        $mail->Sender=$from;

        $mail->AddReplyTo($from, $from_name);

        $mail->Subject = $subject;

        $mail->Body = $body;

        $mail->AddAddress($to);

        if(!$mail->Send())

        {

            $error ="Please try Later, Error Occured while Processing...";

            return $error; 

        }

        else 

        {

            $error = "Thanks You !! Your email is sent.";  

            return $error;

        }

    }

 

    $to   = 'baba15041990@gmail.com';

    $from = 'connection@myprabandhak.com';

    $name = 'MyPrabandhak';

    $subj = 'PHPMailer 5.2 testing from DomainRacer';

    $msg = "<h1>This is mail about testing mailing using PHP.</h1>";

 

    $error=smtpmailer($to,$from, $name ,$subj, $msg);

 

?>



<html>

    <head>

        <title>PHPMailer 5.2 testing from DomainRacer</title>

    </head>

    <body style="background: black;">

        <center><h2 style="padding-top:70px;color: white;"><?php echo $error; ?></h2></center>

    </body>

 

</html>