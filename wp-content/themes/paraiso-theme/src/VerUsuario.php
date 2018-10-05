<?php 

    require('ControladorUsuario.php');
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    header("Access-Control-Allow-Origin: *");
    header('Content type: application/x-www-form-urlencoded'  );
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    $controladorUsuario = new ControladorUsuario();
    $datosUsuario = $controladorUsuario->verU('24');

    echo json_encode($datosUsuario);

?>