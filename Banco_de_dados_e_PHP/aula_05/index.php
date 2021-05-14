<?php
    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki', 'root', '');

    // Comando para buscar todas as informações da tabela
    // $sql = $pdo->prepare("SELECT * FROM posts");

    // Buscando apenas os resultados de uma categoria
    // $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");
    //$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
    
    
    // Comando para executar a busca
    //$sql->execute();
    //$sql->execute(array($_GET['categoria_id']));

    // Comando para armazenar todas as informações buscadas, dentro da variável $info
    // $info = $sql->fetchAll();

    // echo '<pre>';
    // print_r($info);
    // echo '</pre>';

    // Exibindo os dados buscados, através do foreach
    // foreach($info as $key => $value) {
    //     echo 'Título: '.$value['titulo'].'<br>';
    //     //echo 'Categoria: '.$value['categoria_id'].'<br>';
    //     echo 'Conteúdo: '.$value['conteudo'].'<br>';
    //     echo '<hr>';
    // }

    // // Exibindo os dados buscados, através do for
    // for($i = 0; $i < count($info); $i++) {
    //     echo 'Título: '.$info[$i]['titulo'].'<br>';
    //     //echo 'Categoria: '.$info[$i]['categoria_id'].'<br>';
    //     echo 'Conteúdo: '.$info[$i]['conteudo'].'<br>';
    //     echo '<hr>';
    // }


    //$sql = $pdo->prepare("SELECT * FROM categorias");

    //$sql->execute();

    //$info = $sql->fetchAll();

    /*
    foreach($info as $key => $value) {
        $categoria_id = $value['id'];
        echo '<h2>Exbindo posts de: '.$value['nome'].'</h2>';
        echo '<br>';

        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();

        foreach($infoPosts as $key => $value) {
            echo 'Título: '.$value['titulo'];
            echo '<br>';
            echo 'Conteúdo: '.$value['conteudo'];
            echo '<hr>';
        }
    }
    */

    // INNER JOIN
    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");
    
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    echo print_r($info);
    echo '</pre>';

    /*
    foreach($info as $key => $value) {
        echo 'Título: '.$value['titulo'];
        echo '<br>';
        echo 'Conteúdo: '.$value['conteudo'];
        echo '<hr>';
    }
    */
?>