<?php
    include('Exemplo.php');

    // Instância de objeto
    $exemplo = new Exemplo();

    $exemplo->var2 = 'Eduardo';
    //var_dump($exemplo);
    echo $exemplo->var2;

    echo '<hr>';

    //echo Exemplo::$var3;
    Exemplo::$var3 = 'Outra variável';
    echo Exemplo::$var3;

    echo '<hr>';

    Exemplo::metodo3();

    echo '<hr>';

    $outroExemplo = new Exemplo();
    $outroExemplo->setVar1('Eduardo');
    echo $outroExemplo->getVar1();
?>