<!doctype html>
<html lang="es">
  <head>
    <title>Ejercicio3</title>
    <link id="estilo" rel="stylesheet" type="text/css" href="estilo.css" />
    <meta charset="utf-8">
  </head>

  <body>
  <?php 
  	session_start();
  session_destroy();
  ?>
    <div id="contenedor">
      <div id="cabecera">
      <?php include("cabecera.php"); ?>
      </div>
      
      <div id="sidebar-left">
        <?php include("sidebarIzq.php"); ?>
      </div>

      <div id="contenido">

<h2> Hasta pronto! </h2>

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