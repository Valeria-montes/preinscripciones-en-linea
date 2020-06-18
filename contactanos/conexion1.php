<?php
$conexion=mysqli_connect("localhost","root","","contactanos");

if($conexion)
{
 echo "CONEXION EXITOSA";
}
else{
	echo "ERROR AL CONECTARSE A LA BASE DE DATOS";
}

?>