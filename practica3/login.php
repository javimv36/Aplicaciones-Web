<!DOCTYPE html>
<html lang = "es">
  <head>
      <title>
        Practica3
      </title>
      <meta charset="utf-8">
  </head>
  <body>
<h1>Login baby</h1>
	<form method="post" action="login.php">
		<p><input type="text" name="user" value="" placeholder="Usuario"></p>
		<p><input type="password" name="password" value="" placeholder="Contraseña"></p>
		<p class="submit"><input type="submit" name="commit" value="Iniciar sesión"></p>
	</form>

	<?php
		$procesando=isset($_POST['user'])?$_POST['password']:null;

		if($procesando!=null){
			
			$user=$_POST['user'];
			$pass=$_POST['password'];
			$db = @mysqli_connect('localhost','root','','libreria');
			$sql="SELECT user, password FROM usuarios WHERE user='$user' AND password='$pass'";
			$consulta=mysqli_query($db, $sql);
			$filas = mysqli_fetch_array($consulta);
			if ($filas!=null){
				echo "Libros que tiene "; 
				echo $_POST['user'];
				
				echo "te lo sabeees";
			}else{
				echo "no me mieeeentas";
			}
		}
	?>
</body>
</html>