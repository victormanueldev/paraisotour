<?php

/**
	* Envia un Email al usuario
	* @param email, nombre del usuario, asunto del mail y el cuerpo del mail
	* @return Boolean
	**/

	class Email {

		public function enviarEmail($email, $nombre, $asunto, $cuerpo){

		require_once 'PHPMailer/PHPMailerAutoload.php';//Libreria para enviar Emails por PHP

		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		$mail->Username = 'victormalsx@gmail.com';
		$mail->Password = '3103195394sax';

		$mail->setFrom('info@paraisotourweb.com', 'Paraiso Tour');
		$mail->addAddress($email, $nombre); //Aqui va el email del cliente al que vamos a enviar correos (Gerente Paraiso tour)

		$mail->Subject = $asunto;
		//hACER UN HTML PARA ESTILZIAR EL MENSAJE
		$mail->Body    = $nombre." ha solicitado un contacto cone el siguiente mensaje: \n".$cuerpo.".\n\n"."Para contactarse con este cliente su correo es: ".$email;
		$mail->IsHTML(true);

		if($mail->send())
		return true;
		else
		return false;
	}
	}
//<a href="mailto:je395@misena.edu.co">Contáctanos en je395@misena.edu.co</a>
?>