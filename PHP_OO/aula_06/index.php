<?php
    include('Teste.php');
    $teste = new Teste('Eduardo', 24);
    echo $teste->getNome();
    echo '<br>';
    echo $teste->getIdade();
?>