<? php
 $destino="sebastianpinedo6@gmail.com";
 $nombre= $post["nombre"];
 $correo = $post["correo"];
 $telefono=$post["telefono"];
 $mensaje= $post["mensaje"] 
 $contenido= "nombre: " . $nombre. "\nCorreo:" .$correo."\ntelefono:" . $telefono. "\nmensaje:" . $mensaje;
 mail($destino,"contacto", $contenido)
 header("location:index.html")
?>