<?php
    /* Algumas funções nativas */
    
    // Configurar fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    // Datas
    $data = '02/10/1996 22:00:00';

    // Função date()
    $data = date('d/m/Y');
    echo $data;

    echo '<hr>';

    // Data e hora
    $dataEHora = date('d/m/Y H:i:s');
    echo $dataEHora;

    echo '<hr>';

    // Adicionar tempo à hora atual
    // Ex.: adicionar 10 minutos
    $data = date('H:i:s', time() + (60 * 10));
    echo $data;
?>