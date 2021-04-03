<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['content']) ){

    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
    $to = "mohammed@teerental.com"; //// <- Enter your Email
    $subject = "New Contecter";
    $body ='<html>
                <body>
                    <h2>
                        Feedback 
                    </h2>
                    <hr> 
                    <p>Name: <br> '.$name.'</p>
                    <p>Email: <br> '.$email.'</p>
					<p>phone: <br> '.$phone.'</p>
					<p>subject: <br> '.$subject.'</p>
					<p>content: <br> '.$content.'</p>
                </body>
            </html>';
    $headers = "From: ".$name." <".$email.">\r\n";   
    $headers .= "Reply-To: ".$email."\r\n";    
    $headers .= "MIME-Version: 1.0\r\n";    
    $headers .= "Content-type: text/html; charset=utf-8 ";    
    $send = mail($to , $subject , $body , $headers );
        if ($send) {
            echo '<br>';
            echo 'Thanks for contacting me. I will b with you shortly.';
        }else{
            echo 'error';
        }
    }


?>