<?php
$destino = "ruiz.miguel.1403@gmail.com";
$nombre = $_POST("nombre");
$email = $_POST("email");
$telefono = $_POST("telefono");
$mensaje = $_POST("mensaje");
$contenido = "nombre: " . $nombre . "\nemail:" . $email . "\ntelefono:" . $telefono . "\nmensaje:" . $mensaje;
mail($destino,"contacto", $contenido);
header("location:index.html");
 ?>
