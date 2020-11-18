<?php
    //INICIA A SESSÃO
    session_start();

    //DESTROI TODAS AS VARIÁVEIS DE SESSÃO
    session_destroy();

    //REDIRECIONAR PARA O INDEX APÓS LOGOUT
    header("location: index.php");
