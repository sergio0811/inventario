<?php
$prueba= fopen("manual.txt", "r","utf-8");

if($prueba){
    while(!feof($prueba)){
        $linea=fgets($prueba);
        echo $linea."<br>";
    }
}
fclose($prueba);
?>