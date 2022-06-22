<html>
	<head>
		<title>Ejercicio - DELETE</title>
		<link href="estilos.css" rel="stylesheet">  

		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("DELETE FROM tb_libro WHERE Lib_Titulo = '{$_POST['TituloOriginal']}'") 
			or die ("Ha fallado la conexión");
			$conexion2 = null;
			
		?>
	</body>
	<div class="form-signin w-100 m-auto">
<a  href="administrador.html"><button id="boton1" class="w-50 btn " " type="submit">Todo se realizo de manera correcta </button></a>
</html>