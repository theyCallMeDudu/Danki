<?php
    // "abstract" ou classes abstratas servem apenas para
    // serem herdadas. Não podem ser instanciadas.
    abstract class Teste {
        public function funcao1() {
            echo 'chamando função 1';
        }

        // Método abstrato
        // Quando herdamos um método abstrato, precisamos declará-lo
        // em nossa classe que o herdou
        abstract function funcao2();
    }

    class Principal extends Teste {

        public function funcao2() {
            echo 'estoy declarando oficialmente o método abstrato função 2.';
        }

        public static function metodoEstatico() {
            echo 'método estático. <br>';
        }

        public function funcaoTeste (){
            // Chamando métodos estáticos dentro da classe
            Principal::metodoEstatico();
            // self serve apenas para métodos estáticos dentro da classe
            self::metodoEstatico();

            // Chamando método estático de outra classe dentro da classe
            Principal2::outroMetodoEstatico();

        }
    }

    class Principal2 {

        public static function outroMetodoEstatico() {
            echo 'meu outro método estático <br>';
        }
    }

    $principal = new Principal;
    $principal->funcao1();

    echo '<br>';

    $principal->funcao2();

    echo '<br>';

    $principal->funcaoTeste();

    //Principal::metodoEstatico();
?>