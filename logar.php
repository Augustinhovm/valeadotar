<?php

include 'conexao.php';

session_start();

$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT); 
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$sth = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');

$sth->bindvalue(':email',$email);
$sth->bindvalue(':senha',$senha);
$sth->execute();

//var_dump($sth->rowCount()); exit; 

if($sth->rowCount() > 0) :

    $linha = $sth->fetch(PDO::FETCH_ASSOC);
    extract($linha);

    $_SESSION['Login']['email'] = $email;
    $_SESSION['Login']['senha'] = $senha;

    $_SESSION['Login']['nivel_cliente'] = $nivel_cliente;

    //LIBERA ACESSO AO ADMIN
    if ($_SESSION['Login']['nivel_cliente'] == 1) :
        header('Location: texte.php');
        
    //LIBERA PARA OUTRO USUÁRIO
    else:
        header('Location: exemplo.php');

    endif;

else :

   header('Location: index.php');

endif;