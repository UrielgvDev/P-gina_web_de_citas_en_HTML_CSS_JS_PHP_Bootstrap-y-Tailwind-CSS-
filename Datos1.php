<?php
include 'conexion1.php';
$intereses = $_POST['intereses'];
$cuantos_idiomas_ablas = $_POST['cuantos_idiomas_ablas'];
$hooby = $_POST['hooby'];

$consulta = "INSERT INTO datos(intereses,cuantos_idiomas_ablas,hooby VALUES ('$intereses','$cuantos_idiomas_ablas','$hooby')";
$resultado = $conexion1->query($consulta);
header("Location: ../PerfilUsuario.html")
?>