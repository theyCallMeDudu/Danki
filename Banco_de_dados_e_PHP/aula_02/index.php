<?php
    // Configuração de fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    // Conexão com banco de dados
    $pdo = new PDO('mysql:host=localhost;dbname=danki','root','');

    if(isset($_POST['acao'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        // INSERT

        // O ponto de interrogação `?` colocado nas cláusulas WHERE
        // protegem o sistema de sql injection
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

        $sql->execute(array($nome,$sobrenome,$momento_registro));
        echo 'Cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco</title>
</head>
<body>
        <form method="post">
            <input type="text" name="nome" required>
            <input type="text" name="sobrenome" required>
            <input type="submit" name="acao" value="Enviar">
        </form>
</body>
</html>