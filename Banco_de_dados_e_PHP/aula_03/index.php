<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki', 'root', '');

    // UPDATE
    $id = 3;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario',sobrenome='Bros' WHERE id=$id");

    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso.';
    }
?>