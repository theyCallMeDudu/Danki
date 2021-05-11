<?php
    function myAutoLoad($class){
        $class = str_replace('\\', '/', $class);
        echo $class;
        if(file_exists('classes/'.$class.'.php')) {
            include('classes/'.$class.'.php');
        }
    }

    // Registrar a função para que o php a chame automaticamente
    spl_autoload_register('myAutoLoad');
?>