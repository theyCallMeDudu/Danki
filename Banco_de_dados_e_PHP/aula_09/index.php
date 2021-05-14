<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki_2','root','');

    // Evitar conflitos de comandos no banco de dados
    // Este comando fará com que os comandos da index2.php só sejam executados após o término desses
    $pdo->exec("LOCK TABLES `clientes` WRITE");

    sleep(10);
?>