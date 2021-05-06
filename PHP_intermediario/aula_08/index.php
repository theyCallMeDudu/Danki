<?php
    // Funções para manipular arrays

    // array_merge()
    // serve para unir dois ou mais arrays

    $arr1 = array("cor1" => "vermelho", "cor2" => "azul");
    $arr2 = array("fruta1" => "banana", "fruta2" => "abacate");
    $result = array_merge($arr1, $arr2);
    print_r($result);
    echo '<hr>';

    // array_intersect_key()
    // retorna a chave que tiver em ambos os arrays -> retorna o valor da primeira chave

    $arr1 = array("chave1" => "vermelho", "cor2" => "azul");
    $arr2 = array("chave1" => "banana", "fruta2" => "abacate");
    print_r(array_intersect_key($arr1, $arr2));
    echo '<hr>';

    // array_map(funcao_utilizada, $array)
    // serve para aplicar uma função (nativa ou não) a todos os valores do array

    $arr = ['<p>Eduardo</p>', 'Coelho', '<h1>Fulano</h1>'];
    print_r($arr);
    echo '<br>';
    print_r(array_map('strip_tags', $arr));


?>