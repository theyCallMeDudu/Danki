<?php
    /* Concatenação */
    $nome = 'Eduardo';
    $idade = 24;

    // Modo 1 (aspas simples e variáveis)
    echo 'Meu nome é '.$nome.' e tenho '.$idade.' anos.';
    echo '<br>';

    $frase = 'Meu nome é ';

    // Modo 2 (apenas variáveis)
    echo $frase.$nome;
    echo '<br>';
    
    // Modo 3 (aspas duplas e variáveis)
    echo "Meu nome é $nome";
    echo '<br>';

    // Exemplo de concatenação de aspas duplas com HTML
    $nomeDaClasse = 'box';
    echo "<div class=\"$nomeDaClasse\">Meu conteúdo da div</div>";
?>