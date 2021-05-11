<?php
    class Exemplo {
        private $var1;
        public $var2;

        public static $var3 = 'estática';

        // public funciona em qualquer lugar
        // private só conseguimos acessar dentro da classe
         
        public function metodo1() {

        }

        private function metodo2() {

        }

        public static function metodo3() {
            echo 'Método estático';
        }

        public function setVar1($var1) {
            $this->var1 = $var1;
        }

        public function getVar1() {
            return $this->var1;
        }
    }
?>