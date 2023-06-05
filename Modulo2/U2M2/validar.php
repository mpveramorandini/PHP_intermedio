<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM autorizados WHERE usuario = '18123456' AND clave = 'admin12'or
  usuario = '20123456' AND clave = 'admin13'");

if ($usuario == '18123456' && $clave == 'admin12' ||$usuario == '20123456' && $clave == 'admin13' ){
    $_SESSION['admin']== $_POST['usuario'];
    header('Location: mostrar_contenido.php');
} else {
    header('Location: index.php?error');
}
