<?php
    /* Arrays simples */
    $arr = array('Fulano', 'Ciclano', 'Beltrano');
    $arr2 = ['Huguinho', 'Zézinho', 'Luizinho'];
    

    /* Arrays multidimensionais */
    $arr3 = array(array('Fulaninho', 'Beltraninho', 'Ciclaninho'), array(10, 12, 11));
    echo $arr3[0][0].' tem '.$arr3[1][0].' anos.';
    echo '<hr>';
    echo $arr3[0][1].' tem '.$arr3[1][1].' anos.';

    echo '<br>';
    $arr4[0]['chave1'] = 'Joãozinho';
    echo $arr4[0]['chave1'];
    

?>