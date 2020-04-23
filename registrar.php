<?php
$id=$_POST['id'];
$desc=$_POST['descripcion'];
$pre=$_POST['precio'];
$sto=$_POST['stock'];

include "conex.php";
$conn  = conectar();

if(isset($_POST['registrar'])){
$conn->query("INSERT INTO articulos(id,descripcion,precio,stock)values ('$id','$desc','$pre','$sto')");
echo ' <script language="javascript">alert("Articulo registrado");</script> ';
    header("Location:articulos.php");
} else {
    echo ("Guarde el articulo");}

?>
