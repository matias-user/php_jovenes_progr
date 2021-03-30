<?php
$servername = "localhost";
$database = "registro_usuarios";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully </br>";
 
$sql = "UPDATE registros SET nombre = 'Matias', contrasena = 'root', rut = '192818699' WHERE rut = '19281869' ";

$query = "SELECT * FROM registros ORDER by rut ";
$result = mysqli_query($conexion, $query);

echo 'Consulta exitosa';

// if (mysqli_query($conexion, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
// }
// mysqli_close($conexion);


?>