<?php

    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];


    $email_from = 'seanzokai.com';

    $email_subject = "New Hire Form Submission"

    $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                          "User Message: $message.\n".


    $to = "seanokai@hotmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");






?>
