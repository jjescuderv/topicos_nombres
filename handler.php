<?php
    require 'connection.php';

    $nombre = $_POST["nombre"];
    $notif = "";

    if(!empty($nombre)) {
        $sql = "INSERT INTO nombres (nombre) VALUES ('$nombre')";

        if($conn->exec($sql)) $notif = "Añadido: '$nombre'";
        else $notif = "Hubo un error";
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
            <p><?= $notif; ?> </p>
        </form>
    </body>
</html>