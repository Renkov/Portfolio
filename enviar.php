<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = 'Formulario Rellenado';
	$message = "Name: ".$name."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('miguel.trabajomadrid@gmail.com', $subject, $message)){
		echo "Correo enviado";
	}
 ?>