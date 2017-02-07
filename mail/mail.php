<?php
	if((isset($_POST['name'])&&$_POST['name']!="") && (isset($_POST['email']) && $_POST['email']!="") && (isset($_POST['phone']) && $_POST['phone']!="") && (isset($_POST['message']) && $_POST['message']!="") ) {
	       
	        $to = 'igorserhiyenko@gmail.com';
	        $subject = 'Повідомлення з сайту';
	        $message = '
	                <html>
	                    <head>
	                        <title>'.$subject.'</title>
	                    </head>
	                    <body>
	                        <p>Ім\'я: '.$_POST['name'].'</p>
	                        <p>Телефон: '.$_POST['email'].'</p>
	                        <p>Електронна адреса: '.$_POST['phone'].'</p>
	                        <p>Повідомлення: '.$_POST['message'].'</p>
	                    </body>
	                </html>'; 
	        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
	        $headers .= "From: Заказ обратного звонка <no-reply@mozhu.com.ua\r\n";
	        mail($to, $subject, $message, $headers); 
	}