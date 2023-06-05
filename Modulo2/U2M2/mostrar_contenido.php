<?php include("header.php")

?>

<div class="contenido">

    <?php
    session_start();
    ?>


    <div class="salir">
        <ul class="menu_salir">
            <li> <a href="salir.php">Salir</a></li>
            </li>
        </ul>
    </div>

    <div class="mostrar_imagen">
        <img src="img/acceso_cliente.png" alt="">
    </div>




</div>


<?php
include("conexion.php");


$consulta_db = mysqli_query($conexion_db, "SELECT * FROM autorizados WHERE usuario = '$dni_cliente'");
while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
    echo "Bienvenido cliente DNI: " . $mostrar_datos["usuario"] . ". En esta sección encontrará información sobre sus pedidos y compras.";
}


?>

<!-- 
Asegúrate de reemplazar $dni_cliente con el valor real del DNI del cliente al que deseas saludar.
 De esta manera, la consulta SQL solo recuperará los datos correspondientes a ese cliente en particular,
  y el mensaje de bienvenida se mostrará solo una vez para ese cliente. -->

<!--  $consulta_db = mysqli_query($conexion_db, "SELECT * FROM autorizados");

while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
$dni_cliente = $mostrar_datos["usuario"];
echo "Bienvenido cliente DNI: " . $dni_cliente . ". En esta sección encontrará información sobre sus pedidos y compras.";
}
     -->