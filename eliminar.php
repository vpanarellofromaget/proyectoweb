<?php

include("con_db.php");

$Mail=$_POST['Mail'];

if ($conex->connect_error) {
    die("Connection failed: " . $conex->connect_error);
}

$sql = "DELETE FROM clientes WHERE Mail='$Mail'";


$ejecutar = mysqli_query($conex, $sql);

if($ejecutar) {
    echo '
    <script>
        alert("Compra borrada exitosamente");
        window.location= "index.php";
    </script>

    ';
} else { '
    <script>
        alert("Intentalo de nuevo, la compra no fue dada de baja");
        window.location= "index.php";
    </script>
  
    ';
}

mysqli_close($conex);

?>