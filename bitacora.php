<?php 
include('session.php'); 
$sql="SELECT * FROM user";
$query=mysqli_query($conn,$sql);
    
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
                <h1>Listado de usuarios</h1>
                <div class="col-md-8">
                     <table class="table">
                           <thead class="table-success table-striped">
                             <tr>
                                 <th>id</th>
                                 <th>usuario</th>
                                 <th>clave</th>
                         
                            </thead>
                            <tbody>
                                      <?php
                                           while($row=mysqli_fetch_array($query)){
                                      ?>       
                                         <tr>
                                            <th><?php echo $row['userid']?></th>
                                            <th><?php echo $row['username']?></th>
                                            <th><?php echo $row['password']?></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['username'] ?>" class="btn btn-info">editar</a></th> 
                                            <th><a href="eliminar.php?id=<?php echo $row['username'] ?>" class="btn btn-danger">eliminar</a></th>
                                         </tr>
                                      <?php
                                         }
                                      ?>
                            </tbody>
                      </table>
                    
                </div>
                <?php
                           
                           ?>
            </div>
        </div>

</body>
</html>

