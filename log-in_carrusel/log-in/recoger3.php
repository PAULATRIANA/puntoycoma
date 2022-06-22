
<?php
$isbn= $_POST['isbn'];
$titulo= $_POST['titulo'];
$descripcion=$_POST['descr'];
$paginas= $_POST['paginas'];
$precio= $_POST['precio'];
$can_almace= $_POST['cantidad'];
$categoria=$_POST['categoria'];
$genero=$_POST['genero'];


include 'conexion2.php';
$consulta = $conexion2 -> query("INSERT INTO tb_libro (Lib_Isbn, Lib_Titulo, Lib_Descr, Lib_Pag,Lib_Prec, Lib_Cant_almace, Lib_Cate_Id, Lib_Gen_Id) 
VALUES ('$_REQUEST[isbn]','$_REQUEST[titulo]','$_REQUEST[descr]','$_REQUEST[paginas]','$_REQUEST[precio]','$_REQUEST[cantidad]','$_REQUEST[categoria]',
'$_REQUEST[genero]')");



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
<a  href="administrador.html"><button id="boton1"  class="w-50 btn " type="submit">Todo se realizo de manera correcta </button></a>

</div>
    
</body>
</html>