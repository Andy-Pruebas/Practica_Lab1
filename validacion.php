<?php
$usua = $_POST['user'];
$clave = $_POST['clave'];

if(empty($usua) || empty($clave)){
	header("Location: index.php");
	exit();
}

$conexion = new mysqli('l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','n877zmeh7sw73tpj','h33j8hd6l66i1woh','slwehqrjlb0w2nsac');


$result = $conexion->query("SELECT * from empleado where user='" . $usua . "'");

if($row = $result->fetch_object()){
	if($row->clave == $clave){
		session_start();
		$_SESSION['user'] = $row->usua;
		header("Location: articulos.php");
	}else{
		header("Location: index.php");
		exit();
	}
}else{
	header("Location: index.php");
	exit();
}
?>