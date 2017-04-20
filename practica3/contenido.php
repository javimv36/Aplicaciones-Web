<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
  <title>Ejercicio3</title>
  <link id="estilo" rel="stylesheet" type="text/css" href="estilo.css" />
  <meta charset="utf-8">
</head>

<body>
  <div id="contenedor">
    <?php 
		include("cabecera.php");
		include("sidebarIzq.php"); 
	?>
    <div id="contenido">
      <?php

    	if (isset($_SESSION["nombre"])){
        if($_SESSION["login"]==true){
    		echo 'Muestra contenido a cualquier usuario logueado';
      }
    	}
    	?>
    </div>

    <?php 
		include("sidebarDer.php");
		include("pie.php"); 
	?>
  </div>

</body>
</html>
