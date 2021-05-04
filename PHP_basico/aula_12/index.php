<?php
    /* Loops/ Laços de repetição */

    // 1 - Laço de repetição "for"
    // Executa o código e incrementa o contador automaticamente
    for($i = 0; $i < 10; $i++) {
        echo "<div style='background-color: blue;'>Olá, mundo! .$i</div>";
        echo '<hr>';
    }

    // 2 - Laço de repetição "while"
    // Antes de executar o código, verifica a condição dos parênteses.
    // Não incrementa o contador automaticamente.
    $j = 0;
    while($j < 10) {
        echo "<div style='background-color: yellow;'>Olá, mundo! .$j</div>";
        echo '<hr>';
        $j++;
    }

    // 3 - Laço de repetição "do while"
    // Executa o código pelo menos uma vez e só depois confere a condição do while
    $k = 0;
    do {
        echo "<div style='background-color: red;'>Olá, mundo! .$k</div>";
        echo '<hr>';
        $k++; 
    } while($k < 10);

    $l = 11;
    do {
        echo "<div style='background-color: green;'>Olá, mundo! .$k</div>";
        echo '<hr>';
        $l++; 
    } while($l < 10);
?>