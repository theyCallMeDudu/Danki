<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki_2','root','');

    // PDO exibir o que acontece de errado
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Comando SQL LEFT JOIN - retorna tudo o que temos na primeira tabela (esquerda) mesmo que não tenha a correspondência pedida
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    // De forma análoga, porém inversa, o comando SQL RIGHT JOIN trará tudo o que temos na segunda tabela (direita)
    // Neste contexto, todos os resultados que não forem vazios para cargos
    // $sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");

    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach($clientes as $key =>$value) {
        echo $value['nome'];
        echo ' | ';
        echo $value['nome_cargo'];
        echo '<hr>';
    }
?>