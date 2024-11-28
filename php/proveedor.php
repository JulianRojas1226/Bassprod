<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conexionbd.php';

// proveedor
$Nombre_proveedor= $_POST["N-proveedor"];
$Dni_proveedor = $_POST["DNI-proo"];
$i_np = $link->prepare("INSERT INTO proveedor (NID,nombre) VALUES (?,?)");
$i_np->bind_param("is", $Dni_proveedor,$Nombre_proveedor);
if ($i_np->execute()) {
    header('location:../admin/adminv.php');
} else {
    echo "Error: " . $i_np->error;
}



?>
</body>
</html>