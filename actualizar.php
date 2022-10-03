<?php  
   include("conexion.php");
   $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE  id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar Datos Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
   <body>
                        <div class="container mt-5">
                            <form action="editar.php" method="POST">
              
                                          <Input type="hidden" name="id" VALUE="<?php echo $row['id'] ?>">
                 
                                          <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre'] ?>">
                                          <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad" value="<?php echo $row['cantidad'] ?>">
                                          <input type="text" class="form-control mb-3" name="encargado" placeholder="encargado" value="<?php echo $row['encargado'] ?>">
                                          <input type="text" class="form-control mb-3" name="ubicacion" placeholder="ubicacion" value="<?php echo $row['ubicacion'] ?>">
                                       <input type="submit" class="btn  btn-primary btn-danger"  value="actualizar">
                               </form>
                         </div>
   </body>
</html>