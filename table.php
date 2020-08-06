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
    <table>
        <tr>
            <th>Nombres guardados</th>
        </tr>
        <?php 
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