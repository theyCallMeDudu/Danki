<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki_2','root','');

    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` HAVING `salario` >= 1000");
    
    $sql->execute();

    echo '<pre>';
    var_dump($sql->fetchAll());
    echo '</pre>';
?>