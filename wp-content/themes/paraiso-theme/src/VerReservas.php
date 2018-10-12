<?php 

    require('ControladorReservas.php');
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    $controladorReservas = new ControladorReservas();
    $datosReservas = $controladorReservas->verR($_REQUEST['id']);

    echo json_encode($datosReservas);

?>



