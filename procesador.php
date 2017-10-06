<?php

$valor=$_REQUEST["latitud"];
$valor2=$_REQUEST["longitud"];
$enlace = mysqli_connect("localhost", "root", "mysql2017", "catastro", "3306");

        if($enlace){
            echo "Conectado";
        }
        else{
            echo "No conectado";
        }
 $cadena="insert into predio (idpredio, latitud, longitud) values (1, ".$valor.", ".$valor2.")";
     mysqli_query($enlace,$cadena);
 
?>
