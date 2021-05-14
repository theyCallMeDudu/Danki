<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki_2','root','');

    // Comando de busca com LIKE
    // %... - porcentagem e seguido de algo = começa com qualquer coisa, mas tem que ter pelo menos
    // uma aparição do que vem depois do %

    // %...% - porcentagem - alguma coisa - porcentagem = retorna algo que contenha o que foi passado entre
    // os %
    //$sql = $pdo->prepare("SELECT `nome` FROM `clientes` WHERE nome LIKE '%F%'");
    //$sql = $pdo->prepare("SELECT * FROM `clientes` WHERE nome LIKE '%F%'");`

    // Comando de busca com IN
    //$sql = $pdo->prepare("SELECT `nome` FROM `clientes` WHERE id IN (1, 2)");

    // Comando de busca com BETWEEN
    $sql = $pdo->prepare("SELECT `nome` FROM `clientes` WHERE data BETWEEN '2021-05-09' AND '2021-05-13'");


    $sql->execute();

    $clientes = $sql->fetchAll();
    print_r($clientes);
?>