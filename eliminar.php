<?php 
include('session.php'); 
$sql="SELECT * FROM user";
$query=mysqli_query($conn,$sql);
    
$row=mysqli_fetch_array($query);

$id=$_GET['username'];

$sql="DELETE FROM user WHERE username='$id'";
$query=mysqli_query($conn,$sql);
 
   if($query){
       Header("location:index.php");
   }

?>