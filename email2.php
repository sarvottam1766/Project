
 <?php

$to      = 'udsar1766@gmail.com';

$subject = 'Test';

$message = 'Hello';

$headers = 'From: sarvottam1766@gmail.com' . "\r\n" .

    'Reply-To: sarvottam1766@gmail.com' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

 

if(!mail($to, $subject, $message, $headers)){

 echo "Error !!";

}else{

 echo "Email Sent !!";

}

?>