<?php
include "conex.php";
$conn  = conectar();
$cod=$_REQUEST['id'];
$descripcion=$_POST['descripcionu'];
$precio=$_POST['preciou'];
$stock=$_POST['stocku'];


$conn->query("UPDATE articulos SET descripcion='$descripcion',precio='$precio',stock='$stock'where id='$cod'" );
echo "Articulo actualizado";
 header("Location:articulos.php");
?>