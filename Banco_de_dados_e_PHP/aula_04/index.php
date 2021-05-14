<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki', 'root', '');

    // DELETE
    $id = 4;

    // O ponto de interrogação `?` colocado nas cláusulas WHERE
    // protegem o sistema de sql injection
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

    if($sql->execute(array($id))){
        echo 'Meu cliente foi deletado com sucesso.';
    }
?>