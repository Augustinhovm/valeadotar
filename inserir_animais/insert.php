<?php

session_start();

include_once("conexao.php");

$msg = null;
$erros = 0;

//---| REALIZA A VALIDAÇÃO DAS ENTRADAS |---
$nome = filter_input(INPUT_POST, 'ani_nome', FILTER_SANITIZE_STRING);
if(!$nome){ $erros++;  $msg.="Nome Inválido!<br>"; }

$porte = filter_input(INPUT_POST, 'ani_porte', FILTER_SANITIZE_STRING);
if(!$porte){ $erros++;  $msg.="Porte Inválido!<br>"; }

$genero = filter_input(INPUT_POST, 'ani_genero', FILTER_SANITIZE_STRING);
if(!$genero){ $erros++;  $msg.="Genero Inválido!<br>"; }

$cidade = filter_input(INPUT_POST, 'ani_cidade', FILTER_SANITIZE_STRING);
if(!$cidade){ $erros++;  $msg.="Cidade Inválido!<br>"; }

$especie = filter_input(INPUT_POST, 'ani_especie', FILTER_SANITIZE_STRING);
if(!$especie){ $erros++;  $msg.="Espécie Inválido!<br>"; }

$descricao = filter_input(INPUT_POST, 'ani_descricao', FILTER_SANITIZE_STRING);
if(!$descricao){ $erros++;  $msg.="Descrição Inválido!<br>"; }

$telefone = filter_input(INPUT_POST, 'ani_telefone', FILTER_SANITIZE_STRING);
if(!$descricao){ $erros++;  $msg.="Telefone Inválido!<br>"; }
//---
 
//---| VALIDA SE HÁ ERROS DE PREENCHIMENTO |---
if ($erros>0) { 
	header("Location: index.php?msg_erro=" . $msg);
}
//---

$msg = null;
$msg = 'Pet NÃO FOI cadastrado com sucesso';

//---| INSERE O NOVO PET NO BD (PERSISTE O NOVO REGISTRO) |---
$query = "INSERT INTO 
			animais (ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao, ani_telefone) 
		  VALUES 
			('$nome', '$porte', '$genero', '$cidade', '$especie', '$descricao' '$telefone')";
$resultado_usuarios = mysqli_query($mysqli, $query);
if($idDoUltimoAnimalInserido = mysqli_insert_id($mysqli))
{
    $msg = 'Pet cadastrado com sucesso<br>';
   
}


if (isset($_FILES['arquivo'])) { 


	$extensao  = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = $idDoUltimoAnimalInserido.$extensao;
	$diretorio = "upload/";

	$msg_img = "Falha ao enviar aquivo.<br>";
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome)) {
		$msg_img = 'Foto cadastrada!<br>';
	}

	$sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
   
	if($mysqli->query($sql_code)) {
		$msg.= "Arquivo enviado com sucesso!<br>";
	}

}

 header("Location: index.php?msg_success=" .  $msg . $msg_img);

//echo "Nome: $nome <br>";
//echo "Cidade: $cidade <br>";
//echo "Email: $email <br>";
//echo "Telefone: $telefone <br>";
//echo "Endereço: $endereco <br>";



/*session_start();

include '../conexao.php';
$ani_nome = filter_input(INPUT_POST, 'ani_nome', FILTER_DEFAULT);
$ani_porte = filter_input(INPUT_POST, 'ani_porte', FILTER_DEFAULT);
$ani_genero = filter_input(INPUT_POST, 'ani_genero', FILTER_DEFAULT);
$ani_cidade = filter_input(INPUT_POST, 'ani_cidade', FILTER_DEFAULT);
$ani_especie = filter_input(INPUT_POST, 'ani_especie', FILTER_DEFAULT);
$ani_descricao = filter_input(INPUT_POST, 'ani_descricao', FILTER_DEFAULT);

$sth = $pdo->prepare("INSERT INTO animais (ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao) VALUES (ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao)");

$sth->bindValue("ani_nome", $ani_nome);
$sth->bindValue("ani_porte", $ani_porte);
$sth->bindValue("ani_genero", $ani_genero);
$sth->bindValue("ani_cidade", $ani_cidade);
$sth->bindValue("ani_especie", $ani_especie);
$sth->bindValue("ani_descricao", $ani_descricao);
$pdo->lastInsertId();

$sth->execute();
header("LOCATION: index.php");*/


