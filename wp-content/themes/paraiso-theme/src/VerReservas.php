<?php 

    require('ControladorReservas.php');
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    //header("Access-Control-Allow-Origin: *");
    //header('Content type: application/json');
    //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    $controladorReservas = new ControladorReservas();
    $datosReservas = $controladorReservas->verR('1');

    echo json_encode($datosReservas);

?>



