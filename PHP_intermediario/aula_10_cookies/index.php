<?php
    // Cookie - continua existindo após fechar o navegador
    /*
     * setcookie ( string $name , string $value = "" , int $expire = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool
     * parâmetros:
     * nome
     * tempo de expiração: ex.: 24 horas a partir da hora em que foi criado (60*60+24)
     * path: deve-se colocar a barra '/' para que o cookie valha para as outras páginas do seu site
     */
    
    //setcookie('nome','Eduardo',time() + (60*60+24),'/');
    echo $_COOKIE['nome'];

    // para destruir um cookie
    /* não existe função para destruir,
    *  mas pode-se colocar um tempo negativo
    *  para a duração do cookie
    */

    setcookie('nome','Eduardo',time() - (60*60+24),'/');
?>