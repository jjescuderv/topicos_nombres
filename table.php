<!DOCTYPE HTML>
<html>

<head>
    <title>Test</title>
    <h2>Test Tópicos</h2>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <a href="/projects/topicos_nombres"> Volver </a>
    <table style="margin: 10px 0 0 0">
        <tr>
            <th>Nombres guardados</th>
        </tr>

        <?php #Código PHP para llenar la tabla                                                              
            require 'connection.php';
            $sql = "SELECT * FROM nombres";
            foreach ($conn->query($sql) as $row) {
        ?>
            <tr style="border: 1px solid black;">
                <td> <?php print $row['nombre']; ?> </td>
            </tr>
        <?php } ?>
        
    </table>
</body>

</html>