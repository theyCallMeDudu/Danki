<?php
    /* Namespace e keywords */

    include('Teste1.php');
    include('Teste2.php');

    use \Sessao1\Teste1;

    // O caminho antes do nome da classe Teste1 é necessário
    // por causa do namespace
    // $teste = new \Sessao1\Teste1;
    // esta maneira acima é apenas uma forma de fazer. A outra é utilizando o 'use' no topo da classe.

    $teste = new Teste1;
?>