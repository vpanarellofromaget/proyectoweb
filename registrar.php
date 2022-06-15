<?php

    include("con_db.php");

/* if(isset($_POST['Enviar mensaje'])) {
    if (strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1 && strlen($_POST['producto'])>=1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['producto']);
        $consulta = "INSERT INTO datos(nombre,email,producto)VALUES('$name','$email','$producto')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">Te has inscripto correctamente!</h3>
            <?php
        } else{
            ?>
            <h3 class="bad">Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
            ?>
            <h3 class="bad">Por favor complete los campos!</h3>
            <?php
    }
} */

$nombre= $_POST['nombre'];
$correo=$_POST['email'];
$producto=$_POST['producto'];

   $query= "INSERT INTO datosclientes(nombre, email, producto)
             VALUES('$nombre', '$email', '$producto')";


   $ejecutar = mysqli_query($conex, $query);

   if($ejecutar) {
       echo '
       <script>
           alert("Compra hecha exitosamente");
           window.location= "../index.php";
       </script>

       ';
   } else { '
       <script>
           alert("Intentalo de nuevo, compra no registrada");
           window.location= "../index.php";
       </script>
     
       ';
   }
   
  mysqli_close($conex);
?>
?>