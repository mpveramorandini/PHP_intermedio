<?php include("header.php")

?>

<div class= "contenido">

<?php 
session_start();
?>


<div class ="salir">
<ul class="menu_salir">
 <li> <a href="salir.php">Salir</a></li> </li>
</ul>
</div>

<div class="mostrar_imagen">
    <img src="img/acceso_cliente.png"  alt="">
</div>

 


</div>

<?php
    include("conexion.php");

    $consulta_db = mysqli_query($conexion_db, "SELECT * FROM autorizados");

    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        
    ?>

        <div class="mostrar_autorizados">
            <h3><?php echo "Bienvenido cliente DNI: " . $mostrar_datos["usuario"]; ?></h3>
            <h3>En esta sección encontrará información sobre sus pedidos y compras</h3>
        </div>
    <?php }?>

    <?php

// va if y else pero no se como//