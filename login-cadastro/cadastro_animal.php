<?php
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$especie = filter_input(INPUT_POST, 'especie', FILTER_SANITIZE_STRING);
$porte = filter_input(INPUT_POST, 'porte', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

//echo "$nome <br>";
//echo "$genero <br>";
//echo "$especie <br>";
//echo "$porte <br>";
//echo "$cidade <br>";
//echo "$descricao <br>";
//echo "$email <br>";
//echo "$telefone <br>;

$result_animais = "INSERT INTO animais (nome, genero, especie, porte, cidade, descricao, email, telefone, data_cad) VALUES ('$nome', '$genero', '$especie', '$porte', '$cidade', '$descricao', '$email', '$telefone', NOW())";

$resultado_animais = mysqli_query($conn, $result_animais);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Animal cadastrado com sucesso</p>";
    header("Location: index.html");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Animal não foi cadastrado</p>";
    header("Location: ani_cad.php");
}