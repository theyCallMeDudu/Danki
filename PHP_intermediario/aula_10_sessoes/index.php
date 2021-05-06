<?php
    /* Sessões */

    // Sessão - expira ao fechar o navegador
    session_start();
     $_SESSION['nome'] = 'Eduardo';
    echo $_SESSION['nome'];
    

?>