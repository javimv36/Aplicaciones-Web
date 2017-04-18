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
    <div id="cabecera">
    <?php include("cabecera.php"); ?>
    </div>

    <div id="sidebar-left">
      <?php include("sidebarIzq.php"); ?>
    </div>

    <div id="contenido">
      <?php

    	if (isset($_SESSION["nombre"])){
        if($_SESSION["login"]==true){
    		echo 'Muestra contenido a cualquier usuario logueado';
      }
    	}
    	?>
    </div>

    <div id="sidebar-right">
      <?php include("sidebarDer.php"); ?>
    </div>

    <div id="pie">
       <?php include("pie.php"); ?>
    </div>
  </div>

</body>
</html>
