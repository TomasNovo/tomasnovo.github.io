<?php 

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

echo "You have CORS!";

if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']))
{
    print_r("aaaaaa");
    $n = $_POST['n'];
    $e = $_POST['e'];
    $m = nl2br($_POST['m']);
    $to = "up201604503@fe.up.pt";
    $from = $e;
    $subject = 'Contact Form Message';
    $message = '<b>Name:</b>'.$n.'<br><b>Email:</b></br>'.$e.'<p>'.$m.'</p>';
    
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

?>