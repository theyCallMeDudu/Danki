<?php
    class Filha {
        
        public function printOla() {
            echo 'Olá, mundo!';
        }
        
        protected function funcaoTeste() {
            echo 'Chamando função teste.';
        }
    }
    
    /*
    * "final" não permite que a classe seja herdada
    * não seria possível fazer:
    * 
    *  class Pai extends Filha {
        * 
     *  }
     * 
     * se tivéssemos:
     * 
     *  final class Filha {
     * 
     * }
     * 
     * porque Filha é uma classe final
     * 
    */



    class Pai extends Filha {
        
        public function printTchau() {
            echo 'Tchau, mundo!';
            echo '<br>';
            $this->funcaoTeste();
        }

        public function printOla() {
            parent::printOla();
            echo '<br>';
            echo 'Novo olá!';
        }
        
    }

    $filha = new Filha;
    $filha->printOla();
    
    echo '<hr>';

    $pai = new Pai;
    $pai->printTchau();

    echo '<hr>';

    $pai->printOla();


?>