
	// ← Login y registro: Validar con PHP (servidor) y enviar a la BD

	// Login y Registro: Archivos para logueo
	// 10 Oct

	// Archivos necesarios para que el proceso de logueo sea verificado y si es el caso, mostrar la(s) página(s) a las que puede acceder el usuario, sino, regresar a la página de login.

	// Otra parte importante es que si el usuario quiere acceder directamente a la url de la página a la que se debe estar logueado, el sistema se encargará de verificar si existe una sesión iniciada, sino es el caso, le dirá que no puede ver esa página y lo dirige de nuevo al index.php.

	// De acuerdo con el diagrama de flujo que se presentó en la explicación de este sistema, ahora veamos el código de estos 3 archivos:

	// El formulario del index.php tiene como acción el login.php:
	
	
	<?php //Se incluye el archivo de BD require_once("myDBC.php");
		  //Se crea un objeto $consultas = new myDBC(); 
		  //Se reciben los datos del formulario del index.php 
		  //Se les aplica trim para quitar espacios en blanco $user = trim($_POST['usuario']); $pass = trim($_POST['contrasenia']); 
		  //Se usa el método logueo de la clase y éste se encarga 
		  //de mostrar la información necesaria $log = $consultas->logueo($user,$pass);
	?>

// principal.php es la página a la que dirige, si el logueo es exitoso:
	
	
			
		<?php require_once("myDBC.php"); if(isset($_SESSION['session'])) { ?>
		<!DOCTYPE html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>..:PAGINA PRINCIPAL:..</title>
		</head>
		 
		<body bgcolor="#F5A9F2">
			<center>
		 
		<h2>BIENVENIDO</h2>
		 
		 
		</center>
		 
			<a href="salir.php">
		 
		<h4>CERRAR SESSION</h4>
		 
		 
		</a>
		</body>
		</html>
		<?php
		}else
		echo'<img src="" />';
		?>

// Dentro de la página principal, se incluye una etiqueta <a> para destruir la sesión creada. salir.php:
		
		
		<?php require_once("myDBC.php"); session_destroy(); header("Location: http://localhost/login/index.php"); ?>



// Login y registro: Validar con PHP (servidor) y enviar a la BD
// HTML-CSS-PHP-MySQL-JQuery

  