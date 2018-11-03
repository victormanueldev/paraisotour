<?php
	/** Página de Confirmacion PayU */
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	include_once('ControladorReservas.php');
	$controladorReserva = new ControladorReservas();
	//Valida que el estado de la compra sea APROVADO
	if(
		$_REQUEST["response_code_pol"]  == '4' ||
		$_REQUEST["response_code_pol"]  == '5' || 
		$_REQUEST["response_code_pol"]  == '6' ||
		$_REQUEST["response_code_pol"]  == '7' ||
		$_REQUEST["response_code_pol"]  == '8' ||
		$_REQUEST["response_code_pol"]  == '9' ||
		$_REQUEST["response_code_pol"]  == '10' ||
		$_REQUEST["response_code_pol"]  == '12' ||
		$_REQUEST["response_code_pol"]  == '13' ||
		$_REQUEST["response_code_pol"]  == '14' ||
		$_REQUEST["response_code_pol"]  == '17' ||
		$_REQUEST["response_code_pol"]  == '19' ||
		$_REQUEST["response_code_pol"]  == '22' ||
		$_REQUEST["response_code_pol"]  == '23' ||
		$_REQUEST["response_code_pol"]  == '9995' ||
		$_REQUEST["response_code_pol"]  == '9996' ||
		$_REQUEST["response_code_pol"]  == '9997' ||
		$_REQUEST["response_code_pol"]  == '9998' ||
		$_REQUEST["response_code_pol"]  == '9999' ||
		$_REQUEST["response_code_pol"]  == '20' ||
		$_REQUEST["response_code_pol"]  == '1' 
		){
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
