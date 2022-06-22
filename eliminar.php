<?php

include("con_db.php");

$Mail = $_POST['Mail'];
// $conex = mysqli_connect("localhost", "root","","surrealbuzos");
$sql = "DELETE FROM clientes where Mail = $Mail";
$rta = mysqli_query($conex,$sql);

if(!$rta){
    echo"No se Elimino!";
}
else{
    header("Location:index.php");
}

?>
