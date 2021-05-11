<?php
    /* ORIENTAÇÃO A OBJETOS NO PHP OU OOP */

    class Pessoa {
        // Objeto Pessoa
        private $nome = 'Eduardo';
        private $idade = '24';
        private $peso = '70kg';

        public function crescer() {
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer() {
            echo 'estou comendo';
        }
    }

    // Instanciar objetos
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>