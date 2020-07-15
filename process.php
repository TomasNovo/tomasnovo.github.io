<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject =  $_POST['subject'];;
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "tomasnovo98@gmail.com";

    $headers = "From: ".$email;
    $text  = "You have received an email from ".$name.".\n\n".$message;
    
    mail($to, $subject, $text, $headers);
}
?>