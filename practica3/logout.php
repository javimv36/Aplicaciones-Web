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
      <?php 
		include("cabecera.php");
		include("sidebarIzq.php"); 
	?>
      <div id="contenido">

<h2> Hasta pronto! </h2>

</div>

     <?php 
		include("sidebarDer.php");
		include("pie.php"); 
	?>
    </div>

  </body>
</html>
