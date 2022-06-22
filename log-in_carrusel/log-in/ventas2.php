<html>
	<head>
		<title></title>
		<link href="estilos.css" rel="stylesheet"> 

		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
                 include 'conexion2.php'; 
                  $consulta = $conexion2 -> query("SELECT Lib_Cant_almace FROM  tb_libro WHERE  Lib_Titulo='{$_POST['nombreOriginal']}'") or die ("Ha fallado la conexión");
                  while ( $registro = $consulta -> fetch_assoc() ){
	              $registro['Lib_Cant_almace'];
					$R=$registro['Lib_Cant_almace'];
						}
					$Ope= $_POST['VIP']; 
					$Can_M=$_POST['nuevoNombre'];


				if ($Ope=="+") {
				$Can_A =$R+$Can_M;
				}
				else {
				$Can_A =$R-$Can_M;
					}


			include 'conexion2.php';
			$consulta = $conexion2 -> query ("UPDATE  tb_libro SET Lib_Cant_almace = '$Can_A' WHERE Lib_Titulo='{$_POST['nombreOriginal']}' ") or die ("Ha fallado la conexión");
			$conexion2 = null;
			
		?>

<div class="form-signin w-100 m-auto">
<a  href="administrador.html"><button id="boton1"  class="w-50 btn " type="submit">Todo se realizo de manera correcta </button></a>

	</body>
</html>