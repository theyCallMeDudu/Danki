<?php
    session_start();
    $_SESSION['nome'] = 'Eduardo';
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }

    // para destruir a sessão
    unset($_SESSION['nome']);

    // destruir todas as variáveis de sessão
    session_destroy();
?>