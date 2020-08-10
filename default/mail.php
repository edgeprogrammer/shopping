<?php

    $UserName=$_POST['name'];
    $Email=$_POST['email'];
    $Contact=$_POST['number'];
    $Product=$_POST['products'];
    $Product=$_POST['address'];
    
    
    $toEmail="mishrasudhanshu0786@gmail.com";
    $mailHeaders = "From: " . $UserName . "<". $Email .">\r\n";
    if(mail($toEmail, $Subject, $Msg, $mailHeaders)) 
    {
        $message = "Your information is received successfully.";
        $type = "success";
        
echo "<script type='text/javascript'>alert('$message');window.location.assign('clientinvestors.com');</script>";

    }


?>
