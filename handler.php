<?php
    require 'connection.php';

    $nombre = $_POST["nombre"];
    $notif = "";

    if(empty($nombre)) {
        $notif = "Llena el campo";
    } else {
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
        <form action="handler.php" method="POST" style="float:left; margin:0 3px 0 0">
            Nombre: <input name="nombre" type="text">
            <input type="submit">
        </form>
        <form action="table.php" method="POST">
            <button type="submit"> Registros </button>
        </form>
        <p style="float: inherit"><?= $notif; ?> </p>
    </body>
</html>