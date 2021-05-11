<?php
    include('interface1.php');

    class Teste implements Interface1{

        public function printOnScreen($parametro) {
            echo $parametro;
        }
    }

    $teste = new Teste;
    $teste->printOnScreen('Olá, mundo!');
?>