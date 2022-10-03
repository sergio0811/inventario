<div class="container">
	<div style="height:50px;">
	</div>
    <div class="row">
           <h2>Welcome, xuxetumadre!</h2>
           <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
    </div>
</div>
form action="" method="post" target="ventana">
        <input type="submit" name="boton1" href="bitacora.php" value="bitacora">
        <input type="submit" name="boton1" value="ayuda">
        <?php include('header.php'); ?>
<body>
    <nav style= "background-color:#00796b;">
    <center>
        <h1 style="color:white ;">Lista de Usuarios</h1>
     </center>
</nav>
<?php

$conn = new mysqli("localhost", "root", "", "sesion");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>