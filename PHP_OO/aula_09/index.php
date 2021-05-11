<?php
    /* Constantes em PHP OO */
    
    class minhaClasse {
        const VALOR = 300;

        public function __construct() {
            echo self::VALOR;
        }
    }

    new minhaClasse;

    echo '<br>';

    echo minhaClasse::VALOR;
?>