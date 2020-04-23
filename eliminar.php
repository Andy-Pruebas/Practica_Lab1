<?php
include "conex.php";
$conn  = conectar();
$cod=$_REQUEST['id'];
$conn->query("DELETE from articulos where id='$cod'");
echo "Articulo actualizado";
header("Location:articulos.php");
?>