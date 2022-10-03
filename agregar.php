<?php
include("conexion.php");
$con=conectar();
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$encargado=$_POST['encargado'];
$ubicacion=$_POST['ubicacion'];

$sql="INSERT INTO productos VALUES('$id','$nombre','$cantidad','$encargado','$ubicacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: home.php");
}else{

}
?>