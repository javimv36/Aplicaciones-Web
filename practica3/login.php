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

		<h1>Acceso al sistema</h1>

		<form action="procesarLogin.php" method="POST">
		<fieldset>
		<legend>Usuario y contraseña</legend>
		<p><label>Name:</label> <input type="text" name="name" /></p>
		<p><label>Password:</label> <input type="password" name="password" /></p>
		<button type="submit">Entrar</button>
		</fieldset>

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