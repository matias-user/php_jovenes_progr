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
 
// $sql = "UPDATE registros SET nombre = 'Matias', contrasena = 'root', rut = '192818699' WHERE rut = '19281869' ";

$consulta = "SELECT * FROM registros ORDER by rut ";
$resultado = mysqli_query($conexion, $consulta);

if($resultado){
      echo 'Consulta exitosa';
      while ( $row = $resultado->fetch_array()){
      $rut = $row['rut'];
      $nombre = $row['nombre'];
      $email = $row['email'];
      
      ?>
      <div>
            <h2><?php echo $nombre ?> </h2>
            <div>
                  <p>
                  RUT: <?php echo $rut ?>
                  <br>
                  Email: <?php echo $email ?>
                  <br>
                  </p>
            </div>
      </div>
      <?php 
      };
};



