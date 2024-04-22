<?php

$BBDD = "eventoCultural";
$usuario = "marina";
$password = "Chubaca2019";
$reserva = 0;

$conexion = new mysqli('localhost', $usuario, $password, $BBDD);

//echo 'hola';

$idEvento = $_POST["idEvento"];
$importe = $_POST["precio"];
$correo = $_POST["correo"];

//consulta para conseguir el numero de reservas que ya hay en ese evento
$query = "SELECT nReserva FROM reserva WHERE idEvento = " . $idEvento;
if ($resultado1 = mysqli_query($conexion, $query)) {
    $filas1 = mysqli_fetch_assoc($resultado);
    $resultado1 = $filas1 . ['nReserva'];
    echo 'Realizado correctamente 1';
} else {
    echo 'error select  ';
//    $reserva = 0;
}
$reserva = $resultado[0] + 1;

//insertar la nueva reserva
$sql = "INSERT INTO reserva (idreserva, correo, importe, idEvento, nReserva) VALUES (" . $idEvento . ", '" . $correo . "', " . $importe . ", " . $idEvento . ", " . $reserva . ")";
if ($resultado2 = mysqli_query($conexion, $sql)) {
    echo 'Realizado correctamente 2';
} else {
    echo 'error insertar';
}
//Pasa tabla resultado a Sresponder como array asociativa
//echo responder2;
//$hola = json_encode($responder2,true); //string formateado como JSON,
//echo $hola; // respuesta a Javascript

$conexion->close();
