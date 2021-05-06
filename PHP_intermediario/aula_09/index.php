<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Formulários, GET e POST */
        /*
        if(isset($_GET['acao'])) {
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];
            
            echo $nome;
            echo '<br>';
            echo $email;
        }
        */

        /*
        if(isset($_POST['acao'])) {
            $nome = @$_POST['nome'];
            $email = @$_POST['email'];
            
            echo $nome;
            echo '<br>';
            echo $email;
        }
        */

        /*
        if(isset($_POST['acao'])) {
            echo @$_POST['numero1'] + @$_POST['numero2'];
        }
        */

        /*
        if(isset($_POST['acao'])) {
            echo @$_POST['nome'];
        }
        */

        if(isset($_POST['acao'])) {
            foreach(@$_POST['valor'] as $key => $value){
                echo $key;
                echo '=>';
                echo $value;
                echo '<br>';
            }
        }

    ?>
    <!-- <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form> -->

    <!-- <form method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">
    </form> -->
    
    <!-- <form method="post">
        <select name="nome">
            <option value="">Selecione</option>
            <option value="Du">Du</option>
            <option value="Dudu">Dudu</option>
            <option value="Edu">Edu</option>
        </select>
        <input type="submit" name="acao" value="Enviar">
    </form> -->

    <form method="post">
        <select name="nome">
            <option value="">Selecione</option>
            <option value="Du">Du</option>
            <option value="Dudu">Dudu</option>
            <option value="Edu">Edu</option>
        </select>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>
