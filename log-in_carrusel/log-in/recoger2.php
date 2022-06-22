<?php
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email=$_POST['email'];
$contraseña= $_POST['contraseña'];

include 'conexion2.php';
$consulta=$conexion2-> query("INSERT INTO tb_administrador (Admi_Nomb, Admi_Apell,Admi_Email, Admi_Contra) 
VALUES ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[email]','$_REQUEST[contraseña]')");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= <div class="dropdown">
    <link rel="icon" type="image/x-icon" href="favicon-.ico" />
    <link href="estilos.css" rel="stylesheet">  
        <!-- <img src="final.png" alt="" width="900" height="1030" class="row justify-content">
        <strong>Felicitaciones</strong> -->
      
    <title>Insercion de Datos </title>
</head>
<body>

<div class="form-signin w-100 m-auto">
<a  href="registro.html"><button id="boton1"  class="w-50 btn " type="submit">Todo se realizo de manera correcta </button></a>

</div>
    
</body>
</html>