<?php

include("con_db.php");
$ID=$_POST['ID'];

$Nombre=$_POST['Nombre'];
$Mail=$_POST['Mail'];
$Producto=$_POST['Producto'];



$sql = "UPDATE clientes SET Producto='$Producto' WHERE ID='$ID'";

$ejecutar = mysqli_query($conex, $sql);

   if($ejecutar) {
       echo '
       <script>
           alert("Compra modificada exitosamente");
           window.location= "index.php";
       </script>

       ';
   } else { '
       <script>
           alert("Intentalo de nuevo, compra no modificada");
           window.location= "index.php";
       </script>
     
       ';
   }
   
  mysqli_close($conex);
?>
