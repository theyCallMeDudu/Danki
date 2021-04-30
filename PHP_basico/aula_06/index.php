<?php
    /* Arrays */
    $nome = array('Eduardo', 'Gabriela', 'Sophia');

    echo $nome[1].'<br>';
    echo $nome[0] .'<br>';
    echo $nome[2] .'<br>';

    // ou

    $nomes[] = 'Fulano';
    $nomes[] = 'Ciclano';

    echo $nomes[0].'<br>';
    echo $nomes[1].'<br>';

    $sobrenomes = ['Tal', 'Silva', 'Coelho', 'Ferraz'];
    echo $sobrenomes[3].'<br>';

    $valores = array('Teste', 25, true, 2.50);
    echo $valores[3].'<br>';

    $informacao['nome'] = 'Eduardo';
    $informacao['idade'] = 24;
    $informacao['cidade'] = 'Rio de Janeiro';

    echo $informacao['nome'];
    echo '<br>';
    echo $informacao['idade'];
    echo '<br>';
    echo $informacao['cidade'];
?>