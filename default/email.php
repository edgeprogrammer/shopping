<?php

    $UserName=$_POST['name'];
    $Email=$_POST['email'];
    $contact=$_POST['phone_number'];
    $Msg=$_POST['message'];
    
    $toEmail="mishrasudhanshu0786@gmail.com";
    $mailHeaders = "From: " . $UserName . "<". $Email .">\r\n";
    if(mail($toEmail, $Subject, $contact, $Msg)) 
    {
        $message = "Your contact information is received successfully.";
        $type = "success";
        
echo "<script type='text/javascript'>alert('$message');window.location.assign('indiaprocess.com');</script>";

    }


?>
