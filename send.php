<?php

    if(isset($_POST['email']) && $_POST['email'] != ''){
    // validador
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "juanmrodriguez1989@gmail.com";
    $body = "";

    $body .= "From: ".$userName."\r\n";
    $body .= "Email: ".$userEmail."\r\n";
    $body .= "Message: ".$message."\r\n";

    mail($to,$messageSubject,$body);

    }
    


?>