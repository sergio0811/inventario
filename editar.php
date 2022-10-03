<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$encargado=$_POST['encargado'];
$ubicacion=$_POST['ubicacion'];

$sql="UPDATE productos SET nombre='$nombre' ,cantidad='$cantidad' ,encargado='$encargado' ,ubicacion='$ubicacion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: home.php");
    }
?>