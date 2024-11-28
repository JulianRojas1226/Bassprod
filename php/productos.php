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
//nuevo producto
$Nombre= $_POST["Nombre"];
$Cantidad= $_POST["Cantidad"];
$Precio= $_POST["Precio"];
$tipo=$_POST["cmbumedidads"];
$proveedor=$_POST["cmbumedidads1"];
$fichero = $_FILES["imagenp"];
$ficheron = $_FILES["imagenp"]["name"];
$ruta = "../productos/". $ficheron;
$i_np = $link->prepare("INSERT INTO producto (nombre,cantidad,precio,tipo,proveedor,dir) VALUES (?,?,?,?,?,?)");
$i_np->bind_param("siiiis",$Nombre,$Cantidad,$Precio,$tipo,$proveedor,$ruta);
if ($i_np->execute()) {
  header('location:../admin/adminv.php');
} else {  
  echo "Error: " . $i_np->error;
}


// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "../productos/".$fichero["name"]);


?>
</body>
</html>