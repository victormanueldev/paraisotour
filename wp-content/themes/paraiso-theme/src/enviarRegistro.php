<?php 
    require('EnviarEmail.php');
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    $envEmail = new Email();
    if(isset($_GET['email'])){
        $envEmail->notificarNuevoRegistro($_GET['email']);
        echo json_encode(['response' => 'success']);
    }else{
        echo json_encode(['response' => 'error']);
    }
?>