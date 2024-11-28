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

// tipo
$n_t = $_POST["n_tipo"];
// Prepara la sentencia SQL
$stmt = $link->prepare("INSERT INTO tipo_pr (nombre) VALUES (?)");
$stmt->bind_param("s", $n_t);
if ($stmt->execute()) {
    header('location:../admin/adminv.php');
} else {
    echo "Error: " . $stmt->error;
}

// Cierra la sentencia
$stmt->close();

?>
</body>
</html>