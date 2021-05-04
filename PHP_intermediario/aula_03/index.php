<?php
    /* die e sleep */

    // sleep(segundos)
    // tempo que desejamos que o servidor durma antes de executar nosso código

    sleep(3);
    echo 'Olá, ...';
    echo '<br>';
    sleep(3);
    echo 'Mundo!';

    // die
    // interrompe a execução do código a partir do ponto em que é inserido

    $nome = 'Fulano';

    if($nome == 'Fulaninho') {
        // continua a execução do código
        echo 'Tudo certo.';
    } else {
        die("O script parou de ser executado.");
    }

    echo 'lalalalala';



?>