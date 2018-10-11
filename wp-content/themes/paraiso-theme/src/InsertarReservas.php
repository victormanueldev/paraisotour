<?php
	include_once('ControladorReservas.php');
	$controladorReserva = new ControladorReservas();

		echo $resultado = $controladorReserva->crearR(
			$_REQUEST['buyerEmail'],
			$_REQUEST['extra3'],
			$_REQUEST['TX_VALUE'],
			$_REQUEST['referenceCode'],
			$_REQUEST['extra1'],
			$_REQUEST['extra2']
		);
		echo "Se ha guardado la reserva";


	
?>
