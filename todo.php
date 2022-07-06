<?php

include("con_db.php");
$Nombre=$_POST['Nombre'];
$Mail=$_POST['Mail'];
$Producto=$_POST['Producto'];
$deleteOrder=isset($_POST['deleteOrder']);

$sql = "SELECT * FROM clientes WHERE Mail = '$Mail'";

if ($res = mysqli_query($conex, $sql)) {
    // Comprueba si existe.
    if (mysqli_num_rows($res) > 0) {
        // Existe, entonces compruebo que esté tildado la opcion cancelar orden para borrar, sino la actualizo.
        if ((bool)$deleteOrder) {
            $sql = "DELETE FROM clientes WHERE Mail = '$Mail'";
            $statusAction = 'Cancelada';
        } else {
            $sql = "UPDATE clientes SET Nombre = '$Nombre', Producto = '$Producto' WHERE Mail = '$Mail'";
            $statusAction = 'Actualizada';
        }
    } else {
        // No existe, hago el insert
        $sql = "INSERT INTO clientes(Nombre, Mail, Producto) VALUES ('$Nombre','$Mail','$Producto')";
        $statusAction = 'Ingresada';
    }
    if(mysqli_query($conex, $sql)){
        echo '
        <script>
            alert("Compra, ' .$statusAction. ' !");
            window.location= "index.php";
        </script>
 
        ';
    } else{
        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
    }
} else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
}

mysqli_close($conex);

?>