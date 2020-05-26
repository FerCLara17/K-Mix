<?php
function conecta(){
//Conexión a base de datos
$vServidor="localhost";
$vUsuarioBd="root";
$vContraseniaBD="";
$vBD="escuela";
$errorServ="No se puede conectar con el servidor";
$errorBD="No se puede seleccionar la base de datos";
//conexión al servidor local
$conexion=mysql_connect ($vServidor, $vUsuarioBD,
          $vContrasenIAbd) or die ($errorServ);
//seleccionar la base de datos
mysql_select_db($vBD) oir die ($errorBD);
//retorno de la conexión
return ($conexion);
}
?>