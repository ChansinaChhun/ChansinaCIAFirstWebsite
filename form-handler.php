<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from = 'info@ciaschool.edu.kh';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "User Message: $message.\n";

$to= 'chansina.chhun@ciaschool.edu.kh';

$headers= "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email,$email_body,$headers);

header("Location: contact.html");

?>