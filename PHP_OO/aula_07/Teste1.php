<?php

    /* Namespace e keywords */

    // declarando namespace
    namespace Sessao1;
    // indicando o uso da outra classe, que está em outra 'pasta/ local'
    use \Sessao2\Teste2;

    class Teste1 {

        function __construct() {
            echo 'Classe Teste1 instanciada.';
            // A barra invertida antes do nome da classe Teste2 indica que
            // está sendo utilizada, mas está em local diferente da namespace desta classe Teste1
            // new \Sessao2\Teste2;
            new Teste2; // esta maneira acima é apenas uma forma de fazer. A outra é utilizando o 'use' no topo da classe.
        }
    }
?>