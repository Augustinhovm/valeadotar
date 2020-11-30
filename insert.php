<?php

session_start();

include_once("conexao2.php");

$msg = null;
$erros = 0;

//SE O USUÁRIO NÃO ESTIVER AUTENTICADO, FAZ O ENVIO DO LOGIN
if (!array_key_exists('Login', $_SESSION)) {
	require_once("logar.php");
} else {

	//---| REALIZA A VALIDAÇÃO DAS ENTRADAS |---
	$nome = filter_input(INPUT_POST, 'ani_nome', FILTER_SANITIZE_STRING);
	if (!$nome) {
		$erros++;
		$msg .= "Nome Inválido!<br>";
	}

	$porte = filter_input(INPUT_POST, 'ani_porte', FILTER_SANITIZE_STRING);
	if (!$porte) {
		$erros++;
		$msg .= "Porte Inválido!<br>";
	}

	$genero = filter_input(INPUT_POST, 'ani_genero', FILTER_SANITIZE_STRING);
	if (!$genero) {
		$erros++;
		$msg .= "Genero Inválido!<br>";
	}

	$cidade = filter_input(INPUT_POST, 'ani_cidade', FILTER_SANITIZE_STRING);
	if (!$cidade) {
		$erros++;
		$msg .= "Cidade Inválido!<br>";
	}

	$especie = filter_input(INPUT_POST, 'ani_especie', FILTER_SANITIZE_STRING);
	if (!$especie) {
		$erros++;
		$msg .= "Espécie Inválido!<br>";
	}

	$descricao = filter_input(INPUT_POST, 'ani_descricao', FILTER_SANITIZE_STRING);
	if (!$descricao) {
		$erros++;
		$msg .= "Descrição Inválido!<br>";
	}

	$telefone = filter_input(INPUT_POST, 'ani_telefone', FILTER_SANITIZE_STRING);
	if (!$telefone) {
		$erros++;
		$msg .= "Telefone Inválido!<br>";
	}

	$usuario_id = filter_input(INPUT_POST, 'usuario_id', FILTER_SANITIZE_NUMBER_INT);
	if (!$usuario_id) {
		$erros++;
		$msg .= "Doador Inválido!<br>";
	}

	//---

	$msg.= 'Pet NÃO FOI cadastrado com sucesso!<br>';

	//---| VALIDA SE HÁ ERROS DE PREENCHIMENTO |---
	if ($erros > 0) {
		header("Location: quero_doar.php?msg_erro=" . $msg);
	}
	//---
	
	//---| SE PASSOU PELA VALIDAÇÃO DOS CAMPOS, INSERI O ANIMAL |---
	//---| INSERE O NOVO PET NO BD (PERSISTE O NOVO REGISTRO) |---

	$query = "INSERT INTO 
			animais (ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao, ani_telefone) 
		  VALUES 
			('$nome', '$porte', '$genero', '$cidade', '$especie', '$descricao', '$telefone')";

	$query = "INSERT INTO animais (usuario_id, ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao, ani_telefone) 
		      VALUES ('$usuario_id','$nome', '$porte', '$genero', '$cidade', '$especie', '$descricao', '$telefone')";

	$resultado_usuarios = mysqli_query($conn, $query);
	if ($idDoUltimoAnimalInserido = mysqli_insert_id($conn)) {
		$msg = 'Pet cadastrado com sucesso<br>';
	}


	if (isset($_FILES['arquivo'])) {


		$extensao  = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = $idDoUltimoAnimalInserido . $extensao;
		$diretorio = "upload/";

		$msg_img = "Falha ao enviar aquivo.<br>";
		if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome)) {
			$msg_img = 'Foto cadastrada!<br>';
		}

		$sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";

		if ($conn->query($sql_code)) {
			$msg .= "Arquivo enviado com sucesso!<br>";
		}
	}

	header("Location: quero_doar.php?msg_success=" .  $msg . $msg_img);
	
}
