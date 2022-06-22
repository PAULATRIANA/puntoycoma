
 <link href="signin.css" rel="stylesheet">


<?php
session_start();
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$session['correo']=$correo;



include('conexion2.php');

$consulta= "SELECT*FROM tb_administrador where Admi_Email='$correo' and Admi_Contra='$contraseña'";
$resultado=mysqli_query($conexion2,$consulta);

$filas=mysqli_num_rows($resultado);


if ($filas) {
    header("location:administrador.html");
}

else {
?>
<?php
include("log-in.html");
?>

<h1 class="form-signin w-100 m-auto" style="background-color: #a22; color: #fff;" "> Error a la autenticación</h1>

<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion2);

?>