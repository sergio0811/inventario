<?php
    include 'conexion.php';
    $con=conectar();
    
    $sql="SELECT * FROM productos";
    $query=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_array($query);
?>

<body>
    <header>
        <?php require 'header.php' ?>
     </header>
     <h1><center> Bienvenido Al Sistema</h1>
     <a href="bitacora.php">
    <input class="" type="button"  value="bitacora de usuarios"> </button></a>
    <a href="ayuda.php">
        <button> ayuda </button></a>
        <a href="manual.php">
    <input class="" type="button"  value="manual de usuarios"> </button><br></a>
    <br>
     <div class="container mt-5">
            <div class="row">
                
                <div class="col-md-3">
                     <h1>INGRESE DATOS</h1>

                       <form action="agregar.php" method="POST">
                           
                           <input type="text" class="form-control mb-4" name="nombre" placeholder="nombre del producto">
                           <input type="text" class="form-control mb-4" name="cantidad" placeholder="indique cantidad">
                           <input type="text" class="form-control mb-4" name="encargado" placeholder="nombre de encargado ">
                           <input type="text" class="form-control mb-4" name="ubicacion" placeholder="indique ubicacion producto">

                           <input type="submit" class="btn btn-primary">
                           
                        </form>
                    
                </div>
                
                <div class="col-md-8">
                     <table class="table">
                           <thead class="table-success table-striped">
                             <tr>
                                 <th>id</th>
                                 <th>Nombre producto</th>
                                 <th>Cantidad</th>
                                 <th>Encargado</th>
                                 <th>Ubicación</th>
                                 <th></th>
                                 <th></th>
                             </tr>
                         
                            </thead>
                            <tbody>
                                      <?php
                                           while($row=mysqli_fetch_array($query)){
                                      ?>       
                                         <tr>
                                            <th><?php echo $row['id']?></th>
                                            <th><?php echo $row['nombre']?></th>
                                            <th><?php echo $row['cantidad']?></th>
                                            <th><?php echo $row['encargado']?></th>
                                            <th><?php echo $row['ubicacion']?></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">editar</a></th> 
                                            <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">eliminar</a></th>
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

    
<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>

</body>
</html>