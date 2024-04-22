<?php

$BBDD = "eventoCultural";
$usuario = "marina";
$password = "Chubaca2019";

$conexion = new mysqli('localhost', $usuario, $password, $BBDD);

//echo 'hola';

$fecha = $_POST["fecha"];

$sql = "SELECT * FROM evento WHERE fecha='" . $fecha . "'"; //Extrae todos los datos que cumple la condici�n
$resultado = mysqli_query($conexion, $sql);
//Pasa tabla resultado a Sresponder como array asociativa

$i = 0;
while ($tuplas = mysqli_fetch_assoc($resultado)) {
    $responder[$i] = $tuplas;    
    $i++;
}

$hola = json_encode($responder,true); //string formateado como JSON,

echo $hola; // respuesta a Javascript

$conexion->close();