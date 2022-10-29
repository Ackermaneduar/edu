<?php
$cons_usuario="root";
$cons_passw="";
$cons_base_datos="sesion";
$cons_equipo="localhost";
$cone=mysqli_connect($cons_equipo,$cons_usuario,$cons_passw,$cons_base_datos);
if($cone)
{
    echo "Conexion exitosa";
}
else
{
 echo "error en la conexion NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO";
}
?>
