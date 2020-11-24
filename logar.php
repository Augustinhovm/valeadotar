<?php
session_start();

include 'conexao.php';

$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$sth = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');
$sth->bindvalue(':email', $email);
$sth->bindvalue(':senha', $senha);
$sth->execute();

//AUTENTICAÇÃO
if ($sth->rowCount() > 0) {


    $linha = $sth->fetch(PDO::FETCH_ASSOC);

    if ($linha['email'] == $email && $linha['senha'] == $senha) {
        extract($linha);

        $_SESSION['Login']['usuario_id'] = $linha['id'];
        $_SESSION['Login']['email']      = $email;
        $_SESSION['Login']['senha']      = $senha;


        //USUÁRIO AUTENTICADO É DIRECIONADO PARA A PÁGINA APROPRIADA
        header('Location: quero_doar.php');
    }

} else {

    header('Location: index.php');
    
}
