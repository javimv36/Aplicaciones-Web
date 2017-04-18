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
    <?php
$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $password = $_POST["password"];

    if ($name == "user"){
      if($password == "userpass"){

        $_SESSION["nombre"] = "Juan";
        $_SESSION["login"] = true;
      }
  }

    if ($name == "admin"){
      if($password == "adminpass"){
        $_SESSION["nombre"] = "Admin";
        $_SESSION["login"] = true;
        $_SESSION["esAdmin"] = true;
      }
  }
  }
?>
    <div id="contenedor">
      <div id="cabecera">
      <?php include("cabecera.php"); ?>
      </div>

      <div id="sidebar-left">
        <?php include("sidebarIzq.php"); ?>
      </div>

      <div id="contenido">

        <?php echo '<h2> Bienvenido ' . $_SESSION["nombre"] . '</h2>';
        ?>
        <p>Use el menu de la izquierda para navegar </p>

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
