<?php

include 'conexion.php';
 
// $consulta = "UPDATE registros SET nombre = 'Matias', contrasena = 'root', rut = '192818699' WHERE rut = '19281869' ";

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



