<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki_2','root','');

    // PDO exibir o que acontece de errado
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Comando SQL
    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 3");

    // Executando comando SQL
    $sql->execute();

    // Armazenando na variável o que foi buscado
    $clientes = $sql->fetchAll();

    foreach($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr>';
    }
?>