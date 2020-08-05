<?php
    require 'connection.php';

    $nombre = $_POST["nombre"];
    if(!empty($nombre)) {
        $sql = "INSERT INTO nombres (nombre) VALUES ('$nombre')";
        $conn->exec($sql);
    }
    
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Test</title>
        <h2>Test Tópicos</h2>
    </head>
    <body>
        <form action="handler.php" method="POST">
            Nombre: <input name="nombre" type="text">
            <input type="submit">
            <p>Añadido: '<?= $nombre; ?>' </p>
        </form>
    </body>
</html>