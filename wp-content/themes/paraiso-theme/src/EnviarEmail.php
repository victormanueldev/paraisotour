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

			$mail->Subject = 'Solicitud de Contacto';
			// $mail->Body    = $nombre." ha solicitado un contacto con el siguiente mensaje: \n".$cuerpo.".\n\n"."Para contactarse con este cliente su correo es: ".$email;
			$mail->Body = 
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					<title>Portfolio - Responsive Email Template</title>
					<style type="text/css">
						/* ----- Custom Font Import ----- */
						@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);
			
						/* ----- Text Styles ----- */
						table{
							font-family: "Lato", Arial, sans-serif;
							-webkit-font-smoothing: antialiased;
							-moz-font-smoothing: antialiased;
							font-smoothing: antialiased;
						}
			
						@media only screen and (max-width: 700px){
							/* ----- Base styles ----- */
							.full-width-container{
								padding: 0 !important;
							}
			
							.container{
								width: 100% !important;
							}
			
							/* ----- Header ----- */
							.header td{
								padding: 30px 15px 30px 15px !important;
							}
			
							/* ----- Projects list ----- */
							.projects-list{
								display: block !important;
							}
			
							.projects-list tr{
								display: block !important;
							}
			
							.projects-list td{
								display: block !important;
							}
			
							.projects-list tbody{
								display: block !important;
							}
			
							.projects-list img{
								margin: 0 auto 25px auto;
							}
			
							/* ----- Half block ----- */
							.half-block{
								display: block !important;
							}
			
							.half-block tr{
								display: block !important;
							}
			
							.half-block td{
								display: block !important;
							}
			
							.half-block__image{
								width: 100% !important;
								background-size: cover;
							}
			
							.half-block__content{
								width: 100% !important;
								box-sizing: border-box;
								padding: 25px 15px 25px 15px !important;
							}
			
							/* ----- Hero subheader ----- */
							.hero-subheader__title{
								padding: 80px 15px 15px 15px !important;
								font-size: 35px !important;
							}
			
							.hero-subheader__content{
								padding: 0 15px 90px 15px !important;
							}
			
							/* ----- Title block ----- */
							.title-block{
								padding: 0 15px 0 15px;
							}
			
							/* ----- Paragraph block ----- */
							.paragraph-block__content{
								padding: 25px 15px 18px 15px !important;
							}
			
							/* ----- Info bullets ----- */
							.info-bullets{
								display: block !important;
							}
			
							.info-bullets tr{
								display: block !important;
							}
			
							.info-bullets td{
								display: block !important;
							}
			
							.info-bullets tbody{
								display: block;
							}
			
							.info-bullets__icon{
								text-align: center;
								padding: 0 0 15px 0 !important;
							}
			
							.info-bullets__content{
								text-align: center;
							}
			
							.info-bullets__block{
								padding: 25px !important;
							}
			
							/* ----- CTA block ----- */
							.cta-block__title{
								padding: 35px 15px 0 15px !important;
							}
			
							.cta-block__content{
								padding: 20px 15px 27px 15px !important;
							}
			
							.cta-block__button{
								padding: 0 15px 0 15px !important;
							}
						}
					</style>
			
					<!--[if gte mso 9]><xml>
						<o:OfficeDocumentSettings>
							<o:AllowPNG/>
							<o:PixelsPerInch>96</o:PixelsPerInch>
						</o:OfficeDocumentSettings>
					</xml><![endif]-->
				</head>
			
				<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
					<span style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">Un nuevo cliente se ha comunicado con nosotros)</span>
			
					<!-- / Full width container -->
					<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
						<tr>
							<td align="center" valign="top">
								<!-- / 700px container -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
									<tr>
										<td align="center" valign="top">
											<!-- / Header -->
											<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
														<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;">PARAISO TOUR</a>
													</td>
												</tr>
											</table>
											<!-- /// Header -->
			
											<!-- / Hero subheader -->
											<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td class="hero-subheader__title" style="font-size: 30px; font-weight: bold; padding: 80px 0 15px 0;" align="left">Solicitud de Contacto</td>
												</tr>
			
												<tr>
													<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">Uno de nuestros clientes ha solicitado un contacto de soporte a través de nuestra web Paraiso Tour: </td>
												</tr>
											</table>
											<!-- /// Hero subheader -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Nombre del Cliente</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Title -->
												<!-- / Paragraph -->
												<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td align="center" valign="top">
																<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																	<tr>
																		<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$nombre.'</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
													<!-- /// Paragraph -->
			
											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Asunto</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$asunto.'</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Paragraph -->
			
											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Mensaje</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
			
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$cuerpo.'</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Paragraph -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Contacto del Cliente</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">Para comunicarse con el cliente y resolver sus dudas 
																	y preguntas, puede enviar un correo electrónico a la cuenta '.$email.'</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Paragraph -->
			
											<!-- / Divider -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
															<tr>
																<td align="center">&nbsp;</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Divider -->
			
											<!-- / Footer -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
															<tr>
																<td style="text-align: center; padding: 50px 0 10px 0;">
																	<a href="#" style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Paraiso Tour</a>
																</td>
															</tr>
															<tr>
																<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; 2018 <a href="http://paraisotourweb.com/" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Paraiso Tour</a>. <br />All rights reserved.</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Footer -->
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
			</html>';
			$mail->IsHTML(true);

			if($mail->send())
			return true;
			else
			return false;
		}

		public function enviarSugerencia($email, $nombre, $asunto, $cuerpo){
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

			$mail->Subject = "Nueva Sugerencia/Reclamo";
			$mail->Body = 
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					<title>Portfolio - Responsive Email Template</title>
					<style type="text/css">
						/* ----- Custom Font Import ----- */
						@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);
			
						/* ----- Text Styles ----- */
						table{
							font-family: "Lato", Arial, sans-serif;
							-webkit-font-smoothing: antialiased;
							-moz-font-smoothing: antialiased;
							font-smoothing: antialiased;
						}
			
						@media only screen and (max-width: 700px){
							/* ----- Base styles ----- */
							.full-width-container{
								padding: 0 !important;
							}
			
							.container{
								width: 100% !important;
							}
			
							/* ----- Header ----- */
							.header td{
								padding: 30px 15px 30px 15px !important;
							}
			
							/* ----- Projects list ----- */
							.projects-list{
								display: block !important;
							}
			
							.projects-list tr{
								display: block !important;
							}
			
							.projects-list td{
								display: block !important;
							}
			
							.projects-list tbody{
								display: block !important;
							}
			
							.projects-list img{
								margin: 0 auto 25px auto;
							}
			
							/* ----- Half block ----- */
							.half-block{
								display: block !important;
							}
			
							.half-block tr{
								display: block !important;
							}
			
							.half-block td{
								display: block !important;
							}
			
							.half-block__image{
								width: 100% !important;
								background-size: cover;
							}
			
							.half-block__content{
								width: 100% !important;
								box-sizing: border-box;
								padding: 25px 15px 25px 15px !important;
							}
			
							/* ----- Hero subheader ----- */
							.hero-subheader__title{
								padding: 80px 15px 15px 15px !important;
								font-size: 35px !important;
							}
			
							.hero-subheader__content{
								padding: 0 15px 90px 15px !important;
							}
			
							/* ----- Title block ----- */
							.title-block{
								padding: 0 15px 0 15px;
							}
			
							/* ----- Paragraph block ----- */
							.paragraph-block__content{
								padding: 25px 15px 18px 15px !important;
							}
			
							/* ----- Info bullets ----- */
							.info-bullets{
								display: block !important;
							}
			
							.info-bullets tr{
								display: block !important;
							}
			
							.info-bullets td{
								display: block !important;
							}
			
							.info-bullets tbody{
								display: block;
							}
			
							.info-bullets__icon{
								text-align: center;
								padding: 0 0 15px 0 !important;
							}
			
							.info-bullets__content{
								text-align: center;
							}
			
							.info-bullets__block{
								padding: 25px !important;
							}
			
							/* ----- CTA block ----- */
							.cta-block__title{
								padding: 35px 15px 0 15px !important;
							}
			
							.cta-block__content{
								padding: 20px 15px 27px 15px !important;
							}
			
							.cta-block__button{
								padding: 0 15px 0 15px !important;
							}
						}
					</style>
			
					<!--[if gte mso 9]><xml>
						<o:OfficeDocumentSettings>
							<o:AllowPNG/>
							<o:PixelsPerInch>96</o:PixelsPerInch>
						</o:OfficeDocumentSettings>
					</xml><![endif]-->
				</head>
			
				<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
					<span style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">Se ha registrado una nueva sugerencia/reclamo en nuestra página web</span>
			
					<!-- / Full width container -->
					<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
						<tr>
							<td align="center" valign="top">
								<!-- / 700px container -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
									<tr>
										<td align="center" valign="top">
											<!-- / Header -->
											<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
														<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;">PARAISO TOUR</a>
													</td>
												</tr>
											</table>
											<!-- /// Header -->
			
											<!-- / Hero subheader -->
											<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td class="hero-subheader__title" style="font-size: 30px; font-weight: bold; padding: 80px 0 15px 0;" align="left">Nueva Sugerencia/Reclamo</td>
												</tr>
			
												<tr>
													<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">
														Uno de nuestros clientes  ha registrado una nueva sugerencia o reclamo a través de nuestra web Paraiso Tour: </td>
												</tr>
											</table>
											<!-- /// Hero subheader -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Nombre del Cliente</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Title -->
												<!-- / Paragraph -->
												<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td align="center" valign="top">
																<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																	<tr>
																		<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$nombre.'</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
													<!-- /// Paragraph -->
			
											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Motivo</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$asunto.'</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Paragraph -->
			
											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Mensaje</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
			
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$cuerpo.'</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Paragraph -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Contacto del Cliente</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">Para comunicarse con el cliente y dar respuesta a este mensaje, puede enviar un correo electrónico a la cuenta '.$email.'</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Paragraph -->
			
											<!-- / Divider -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
															<tr>
																<td align="center">&nbsp;</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Divider -->
			
											<!-- / Footer -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
															<tr>
																<td style="text-align: center; padding: 50px 0 10px 0;">
																	<a href="#" style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Paraiso Tour</a>
																</td>
															</tr>
															<tr>
																<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; 2018 <a href="http://paraisotourweb.com/" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Paraiso Tour</a>. <br />All rights reserved.</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Footer -->
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
			</html>';
			$mail->IsHTML(true);

			if($mail->send())
				return true;
			else
				return false;
		
		}

		public function notificarNuevoRegistro($email, $nombre){
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

			$mail->Subject = "Notificación de Nuevo Registro";
			$mail->Body = 
			'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					<title>Portfolio - Responsive Email Template</title>
					<style type="text/css">
						/* ----- Custom Font Import ----- */
						@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);
			
						/* ----- Text Styles ----- */
						table{
							font-family: "Lato", Arial, sans-serif;
							-webkit-font-smoothing: antialiased;
							-moz-font-smoothing: antialiased;
							font-smoothing: antialiased;
						}
			
						@media only screen and (max-width: 700px){
							/* ----- Base styles ----- */
							.full-width-container{
								padding: 0 !important;
							}
			
							.container{
								width: 100% !important;
							}
			
							/* ----- Header ----- */
							.header td{
								padding: 30px 15px 30px 15px !important;
							}
			
							/* ----- Projects list ----- */
							.projects-list{
								display: block !important;
							}
			
							.projects-list tr{
								display: block !important;
							}
			
							.projects-list td{
								display: block !important;
							}
			
							.projects-list tbody{
								display: block !important;
							}
			
							.projects-list img{
								margin: 0 auto 25px auto;
							}
			
							/* ----- Half block ----- */
							.half-block{
								display: block !important;
							}
			
							.half-block tr{
								display: block !important;
							}
			
							.half-block td{
								display: block !important;
							}
			
							.half-block__image{
								width: 100% !important;
								background-size: cover;
							}
			
							.half-block__content{
								width: 100% !important;
								box-sizing: border-box;
								padding: 25px 15px 25px 15px !important;
							}
			
							/* ----- Hero subheader ----- */
							.hero-subheader__title{
								padding: 80px 15px 15px 15px !important;
								font-size: 35px !important;
							}
			
							.hero-subheader__content{
								padding: 0 15px 90px 15px !important;
							}
			
							/* ----- Title block ----- */
							.title-block{
								padding: 0 15px 0 15px;
							}
			
							/* ----- Paragraph block ----- */
							.paragraph-block__content{
								padding: 25px 15px 18px 15px !important;
							}
			
							/* ----- Info bullets ----- */
							.info-bullets{
								display: block !important;
							}
			
							.info-bullets tr{
								display: block !important;
							}
			
							.info-bullets td{
								display: block !important;
							}
			
							.info-bullets tbody{
								display: block;
							}
			
							.info-bullets__icon{
								text-align: center;
								padding: 0 0 15px 0 !important;
							}
			
							.info-bullets__content{
								text-align: center;
							}
			
							.info-bullets__block{
								padding: 25px !important;
							}
			
							/* ----- CTA block ----- */
							.cta-block__title{
								padding: 35px 15px 0 15px !important;
							}
			
							.cta-block__content{
								padding: 20px 15px 27px 15px !important;
							}
			
							.cta-block__button{
								padding: 0 15px 0 15px !important;
							}
						}
					</style>
			
					<!--[if gte mso 9]><xml>
						<o:OfficeDocumentSettings>
							<o:AllowPNG/>
							<o:PixelsPerInch>96</o:PixelsPerInch>
						</o:OfficeDocumentSettings>
					</xml><![endif]-->
				</head>
			
				<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
					<span style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">Un nuevo cliente se ha registrado en nuestra página web</span>
			
					<!-- / Full width container -->
					<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
						<tr>
							<td align="center" valign="top">
								<!-- / 700px container -->
								<table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff" style="width: 700px;">
									<tr>
										<td align="center" valign="top">
											<!-- / Header -->
											<table class="container header" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
														<a href="#" style="font-size: 30px; text-decoration: none; color: #000000;">PARAISO TOUR</a>
													</td>
												</tr>
											</table>
											<!-- /// Header -->
			
											<!-- / Hero subheader -->
											<table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
												<tr>
													<td class="hero-subheader__title" style="font-size: 30px; font-weight: bold; padding: 80px 0 15px 0;" align="left">Nuevo Registro</td>
												</tr>
			
												<tr>
													<td class="hero-subheader__content" style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;" align="left">
														Un nuevo cliente se ha registrado a través de nuestra web Paraiso Tour: </td>
												</tr>
											</table>
											<!-- /// Hero subheader -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Nombre del Cliente</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Title -->
												<!-- / Paragraph -->
												<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td align="center" valign="top">
																<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																	<tr>
																		<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">'.$nombre.'</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
													<!-- /// Paragraph -->

											<!-- / Title -->
											<table class="container title-block" border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td align="center" valign="top">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
															<tr>
																<td style="border-bottom: solid 1px #eeeeee; padding: 35px 0 18px 0; font-size: 26px;" align="left">Email del Cliente</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Title -->
											<!-- / Paragraph -->
											<table class="container paragraph-block" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tr>
														<td align="center" valign="top">
															<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
																<tr>
																	<td class="paragraph-block__content" style="padding: 25px 0 18px 0; font-size: 16px; line-height: 27px; color: #969696;" align="left">Para comunicarse con el cliente enviar notificaciones, puede enviar un correo electrónico a la cuenta '.$email.'</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												<!-- /// Paragraph -->
			
											<!-- / Divider -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding-top: 25px;" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #eeeeee; width: 620px;">
															<tr>
																<td align="center">&nbsp;</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Divider -->
			
											<!-- / Footer -->
											<table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
												<tr>
													<td align="center">
														<table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
															<tr>
																<td style="text-align: center; padding: 50px 0 10px 0;">
																	<a href="#" style="font-size: 28px; text-decoration: none; color: #d5d5d5;">Paraiso Tour</a>
																</td>
															</tr>
															<tr>
																<td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">Copyright &copy; 2018 <a href="http://paraisotourweb.com/" target="_blank" style="text-decoration: none; border-bottom: 1px solid #d5d5d5; color: #d5d5d5;">Paraiso Tour</a>. <br />All rights reserved.</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											<!-- /// Footer -->
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
			</html>';
			$mail->IsHTML(true);

			if($mail->send())
				return true;
			else
				return false;
		
		}

	}
?>