<?php
	/** Página de Confirmacion PayU */
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	include_once('ControladorReservas.php');
	$controladorReserva = new ControladorReservas();
	//Valida que el estado de la compra sea APROVADO
	if($_REQUEST["response_code_pol"] == 1 || $_REQUEST["response_code_pol"]== '1'){
		echo $resultado = $controladorReserva->crearR(
			$_REQUEST['buyerEmail'],
			$_REQUEST['extra3'],
			$_REQUEST['TX_VALUE'],
			$_REQUEST['referenceCode'],
			$_REQUEST['extra1'],
			$_REQUEST['extra2']
		);
		return;
	}
	// echo "Se ha guardado la reserva";

?>
