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

$ID= $_POST['ID'];
$Nombre=$_POST['Nombre'];
$Mail=$_POST['Mail'];
$Producto=$_POST['Producto'];

   $query= "INSERT INTO datosclientes(ID, Nombre, Mail, Producto)
             VALUES('$ID', '$Nombre', '$Mail', '$Producto')";


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