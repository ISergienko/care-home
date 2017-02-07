
// check if fields passed are empty
//if(empty($_POST['name'])  		||
//   empty($_POST['email']) 		||
//   empty($_POST['phone']) 		||
//   empty($_POST['message'])	||
//   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//   {
//	echo "No arguments Provided!";
//	return false;
//   }
//
//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$phone = $_POST['phone'];
//$message = $_POST['message'];
//
//// create email body and send it
//$to = 'cyanoluck@gmail.com'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
//$email_subject = "Обратный звонок";
//$email_body = '
//	                <html>
//	                    <head>
//	                        <title>'.$subject.'</title>
//	                    </head>
//	                    <body>
//	                        <p>Имя: '.$_POST['name'].'</p>
//	                        <p>Телефон: '.$_POST['phone'].'</p>
//	                        <p>Сообщение: '.$_POST['message'].'</p>
//	                    </body>
//	                </html>'; ;
//$headers = "From: sales@rjgroup.com.ua\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
//$headers .= "Reply-To: $email_address";
//mail($to,$email_subject,$email_body,$headers);
//return true;




<?php

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")) {
    $to = 'info@mozhu.com.ua';
//    $to = 'info@rjgroup.com.ua';
    $subject = 'Обратный звонок';
    $message = ' <html>
	                    <head>
	                        <title>'.$subject.'</title>
	                    </head>
	                    <body>
	                        <p>Iм\'я: '.$_POST['name'].'</p>
	                        <p>Телефон: '.$_POST['phone'].'</p>
	                        <p>Електронна адреса: '.$_POST['email'].'</p>
	                        <p>Повiдомлення: '.$_POST['message'].'</p>
	                    </body>
	                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From:  Форма зворотнього зв'язку <no-reply@rjgroup.com.ua\r\n";
    mail($to, $subject, $message, $headers);
}