<?php
    // switch, continue e break

    $nome = 'Eduardo';

    // switch/ switch-case
    // tipo de verificação
    switch($nome) {
        case 'Eduardo':
            echo 'Minha variável é Eduardo';
            break;
        case 'Joaozinho':
            echo 'Minha variável é Joaozinho';
            break;
    }


    // break
    // usado para interromper a execução do código
    // pode ser usado em for, while, do-while, foreach e switch
    for($i = 0; $i < 10; $i++) {
        echo $i;
        echo '<hr>';
        
        if($i == 5) {
            break;
        }
    }


    // continue
    // usado para prosseguir com a execução do código
    // pode ser usado em for, while, do-while e foreach
    for($i = 0; $i < 10; $i++) {
        if($i == 5) {
            continue;
        }
        echo $i;
        echo '<hr>';
    }
?>