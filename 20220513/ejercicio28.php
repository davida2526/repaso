<?php

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasena="";

try{


$conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasena );
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programación ', 'foto.jpg');"; 

     $conexion->exec($sql);         



echo "conexion establecida";

}catch(PDOException $error){
    echo "conexion erronea".$error;
      
}



?>