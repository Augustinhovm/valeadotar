<?php
session_start();

include 'conexao.php';

<<<<<<< HEAD
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$sth = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
$sth->bindvalue(':email', $email);
$sth->bindvalue(':senha', $senha);
$sth->execute();

//var_dump($sth->rowCount()); exit;

//AUTENTICAÇÃO
if ($sth->rowCount() > 0) {


    $linha = $sth->fetch(PDO::FETCH_ASSOC);

    if ($linha['email'] == $email && $linha['senha'] == $senha) {
        extract($linha);

        $_SESSION['Login']['email'] = $email;
        $_SESSION['Login']['senha'] = $senha;

        $_SESSION['Login']['nivel_cliente'] = $nivel_cliente;
=======
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT); 
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$sth = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
$sth->bindvalue(':email',$email);
$sth->bindvalue(':senha',$senha);
$sth->execute();

//var_dump($sth->rowCount()); exit;

//AUTENTICAÇÃO
if($sth->rowCount() > 0 ) 
{


    $linha = $sth->fetch(PDO::FETCH_ASSOC);

    if($linha['email']==$email && $linha['senha']==$senha)
    {
        extract($linha);

        $_SESSION['Login']['email'] = $email;
        $_SESSION['Login']['senha'] = $senha;

        $_SESSION['Login']['nivel_cliente'] = $nivel_cliente;

        //USUÁRIO AUTENTICADO É DIRECIONADO PARA A PÁGINA APROPRIADA
        header('Location: exemplo.php');

    }
    
}
else 
{
>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea

        //USUÁRIO AUTENTICADO É DIRECIONADO PARA A PÁGINA APROPRIADA
        header('Location: quero_doar.php');
    }
} else {

<<<<<<< HEAD
    header('Location: index.php');
}
=======
}
>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea
