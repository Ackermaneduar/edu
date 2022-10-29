<?php
include("conexion.php");
//agregar registros a la base de datos
$sql= "SELECT * FROM iniciosesion"; 
$sql = "INSERT INTO iniciosesion(Nombre,Correo, Contraseña) VALUES('Ken', 'ken@gmail.com', 'erestu')";
$result = mysqli_query($cone,$sql);
if ($result) 
{
    echo "registro creado exitosamente";
}
else 
{ 
    echo "no jalo:(";
}
mysqli_close($cone);
//$cone->close();
?>