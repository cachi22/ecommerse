<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" type="text/css" href="css\estilos.css" />
</head>
<body>

<h1>Tienda de Ropa</h1>

<h2>Lista de Ropa</h2>
<p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

<div class="card-container">

<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion,"tienda");

$consulta = "SELECT * FROM ropa";
$datos = mysqli_query($conexion, $consulta);

while ($reg = mysqli_fetch_assoc($datos)) { ?>
    <div class="card">
        <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>">
        <h3><?php echo $reg['prenda']; ?></h3>
        <p>Marca: <?php echo $reg['marca']; ?></p>
        <p>Talle: <?php echo $reg['talle']; ?></p>
        <p>Precio: <?php echo $reg['precio']; ?></p>
        <a href=""><button class= "boton">ver mas</button></a>
    </div>
<?php }

mysqli_close($conexion);
?>

</div>

</body>
</html>

