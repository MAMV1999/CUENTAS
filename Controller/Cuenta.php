<?php
require_once '../Model/Cuenta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $observacion = [
        'observacion' => $_POST['observacion'],
        'tipo' => $_POST['tipo'],
        'monto' => $_POST['monto'],
        'fecha' => date('Y-m-d H:i:s')
    ];

    $modelo = new Cuenta();
    $modelo->saveObservacion($observacion);

    header('Location: ../index.php');
    exit();
}
?>
