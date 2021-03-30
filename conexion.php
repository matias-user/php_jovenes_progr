<?php 

$conexion = mysql_connect("localhost", "root", "") or die ("No conectado </br>");
echo 'Conexion exitosa </br>';

mysql_set_charset('utf-8');

mysql_select_db("registro_usuarios") or die('Base de dato no encontrada.</br>');
echo 'Base de dato SI encontrada. </br>'

?>