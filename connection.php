<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "topicos_nombres";
    
    try {
      $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>