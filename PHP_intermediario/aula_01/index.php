<?php
    /* For each e for para arrays */
    $arr = array('Fulano', 'Beltrano', 'Ciclano');

    foreach($arr as $key => $value) {
        echo $key;
        echo ' => ';
        echo $value;
        echo '<hr>';
    }

    $arrKeyPersonalizada = array('pato'=>'Huguinho', 'pato2'=>'Zézinho', 'pato3'=>'Luizinho');

    foreach($arrKeyPersonalizada as $key => $value) {
        echo $key;
        echo ' => ';
        echo $value;
        echo '<hr>';
    }

    $total = count($arr);

    for($i = 0; $i < $total; $i++) {
        echo $arr[$i];
        echo '<hr>';
    }

?>