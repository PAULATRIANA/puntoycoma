<?php
$servidor='localhost';
$basedatos='id19154418_pyc';
$usuario='id19154418_puntoycoma';
$contrasena='_PY8[X<Ce6}LMN(H';

$conexion2 = new mysqli($servidor,$usuario,$contrasena,$basedatos);

if ($conexion2->connect_errno) {
    die("Ha ocurrido un error");
}

?>