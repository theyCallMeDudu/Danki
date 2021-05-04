<?php
    /* Operadores */

    // Atribuição
    // =
    $nome = 'Dudu';
    $nome2 = 'Coelho';
    $valor = 10;
    $valor2 = '10';

    // Comparação de igualdade
    // ==
    if($nome == $nome2) {
        echo 'Verdade';
    }

    // Comparação de diferença
    // !=
    if($nome != $nome2) {
        echo 'Falso';
    }

    // Comparação de identidade (valor e tipo de dado)
    // ===
    if($valor === $valor2) {
        echo 'Verdade';
    } else {
        echo 'Não são idênticos.';
    }

    // Comparação de diferentes identidades (valor e tipo de dado)
    // Segue a mesma lógica do anterior, porém, para diferenças
    // !==
    if($valor !== $valor2) {
        echo 'Verdade';
    }
?>