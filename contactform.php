<?php 

if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']))
{
    $n = $_POST['n'];
    $e = $_POST['e'];
    $m = nl2br($_POST['m']);
    $to = "up201604503@fe.up.pt";
    $from = $e;
    $subject = 'Contact form message';
    $message = '<b>Name:</b>'.$n.'<br><b>Email:</br></b>'.$e.'<p>'.$m.'</p>';
    
    $headers = "From: $from\n";
    $headers .= "MIME-VERSION: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if(mail($to, $subject, $message, $headers))
    {
        echo "success";
    }
    else
    {
        echo "Server failed to send te message. Please try again later.";
    }
    
}