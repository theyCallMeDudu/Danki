<?php
    /* Operadores lógicos e matemáticos*/

    $valor1 = 5;
    $valor2 = 10;
    $valor3 = 15;

    // Matemáticos
    // Menor
    // <
    if($valor1 < $valor2) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // Menor ou igual
    // <=
    if($valor1 <= $valor2) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // Maior
    // >
    if($valor1 > $valor2) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // Maior ou igual
    // >=
    if($valor1 >= $valor2) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // Lógicos
    // E lógico
    // &&
    if(($valor1 < $valor2) && ($valor1 < $valor3)) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // OU lógico
    // ||
    if(($valor1 < $valor2) || ($valor1 > $valor3)) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

?>