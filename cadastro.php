<?php
session_start();

include_once('conexao2.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Cidade: $cidade <br>";
//echo "Email: $email <br>";
//echo "Telefone: $telefone <br>";
//echo "Endereço: $endereco <br>";

$result_usuarios = "INSERT INTO usuarios (nome, cidade, email, senha, telefone, endereco) VALUES ('$nome', '$cidade', '$email', '$senha', '$telefone', '$endereco')";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: cadastromain.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado</p>";
    header("Location: cadastromain.php");
}