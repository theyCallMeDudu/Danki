<?php
    /* Funções nativas e criando funções */

    // Criando funções
    function mostraNome($nome) {
        echo $nome;
    }

    function soma($valor1, $valor2) {
        echo $valor1 + $valor2;
    }

    function verdade() {
        return true;
    }

    $nome = 'Eduardo';
    mostraNome($nome);
    
    echo '<hr>';

    $numero1 = 10;
    $numero2 = 10;
    soma($numero1, $numero2);

    echo '<hr>';

    $var = verdade();
    echo $var;
    echo '<br>';
    echo verdade();

?>