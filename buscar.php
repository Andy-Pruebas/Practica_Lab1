<?php
include "conex.php";
$conn  = conectar();
$cod=$_REQUEST['id'];
$descrip=$_REQUEST['descripcionu'];
$conn->query("SELECT * FROM articulos where id='$cod' or descripcion='descrip'");
 header("Location:articulos.php");
?>