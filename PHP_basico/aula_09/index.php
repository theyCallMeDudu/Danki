<?php
    /* Condições */
    $nome1 = 'Fulano';
    $nome2 = 'Ciclano';

    // if($nome1 == $nome2) {
    //     echo '<div style="width: 300px; height: 300px; background-color: red;"></div>';
    // } else {
    //     echo 'A condição não bate.';
    // }

    if($nome1 != $nome2) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola! Aqui és mi site!
</body>
</html>

<?php
    }
?>

<?php
    $var1 = 10 + 5;
    $var2 = '10 + 5';

    if($var1 == $var2) {
        echo 'verdadeiro!';
    } else if($var1 != $var2) {
        echo 'verdadeiro na else if!';
    } 
    else {
        echo 'falso!';
    }
?>