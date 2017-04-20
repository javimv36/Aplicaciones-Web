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
        	<h1>Página principal</h1>
    		<p> Aquí está el contenido público, visible para todos los usuarios. </p>
	</div>

        <?php 
		include("sidebarDer.php");
		include("pie.php"); 
	?>

    </div>

  </body>
</html>
