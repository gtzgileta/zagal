<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$to_one      = 'zagal.jalisco@gmail.com';

$subject = 'Mensaje de Cliente "'.$name.'" para Zagal.com';

$message = 'Asunto: '.$subject.'<br><br>'.$name.' dice:<br><br>'.$message.'<br><br>Datos de contacto:<br><br>Correo: '.$email;

$headers = 'From: zagal@gmail.com' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n".
	'Content-type: text/html; charset=iso-8859-1' . "\r\n".
    'Reply-To: no-reply-zagal@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($to, $subject, $message, $headers);
if(mail($to_one, $subject, $message, $headers)) {
	echo 'yes';
} else {
	echo 'not';
}


#header('Location: http://google.com'); # After sending a message redirect to homepage
?> 