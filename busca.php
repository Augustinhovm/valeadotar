<?php

session_start();

include_once("conexao2.php");

$msg = null;
$filtroSql = null;
$totalFiltrosSql = 0;
$erros = 0;

//---| REALIZA A VALIDAÇÃO DAS ENTRADAS |---
$especie = filter_input(INPUT_POST, 'ani_especie', FILTER_SANITIZE_STRING);
$totalFiltrosSql++;
if (!$especie) {
    $erros++;
    $totalFiltrosSql--;
    $msg .= "especie Inválido!<br>";
}
$filtroSql .= 'ani_especie="' . $especie . '"';

$porte = filter_input(INPUT_POST, 'ani_porte', FILTER_SANITIZE_STRING);
$totalFiltrosSql++;
if (!$porte) {
    $erros++;
    $totalFiltrosSql--;
    $msg .= "porte Inválido!<br>";
}
$filtroSql .= ($totalFiltrosSql > 0) ? ' OR ani_porte="' . $porte . '"' : 'ani_porte="' . $porte . '"';

$genero = filter_input(INPUT_POST, 'ani_genero', FILTER_SANITIZE_STRING);
$totalFiltrosSql++;
if (!$genero) {
    $erros++;
    $totalFiltrosSql--;
    $msg .= "genero Inválido!<br>";
}
$filtroSql .= ($totalFiltrosSql > 0) ? ' OR ani_genero="' . $genero . '"' : 'ani_genero="' . $genero . '"';

$cidade = filter_input(INPUT_POST, 'ani_cidade', FILTER_SANITIZE_STRING);
$totalFiltrosSql++;
if (!$cidade) {
    $erros++;
    $totalFiltrosSql--;
    $msg .= "cidade Inválido!<br>";
}
$filtroSql .= ($totalFiltrosSql > 0) ? ' OR ani_cidade="' . $cidade . '"' : 'ani_cidade="' . $cidade . '"';


$msg = null;
$msg = 'Infelizmente não encontramos um PET nessas especificações!';

//---| INSERE O NOVO PET NO BD (PERSISTE O NOVO REGISTRO) |---
$query = "SELECT ani_id, ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao, ani_telefone 
          FROM animais ";
if ($totalFiltrosSql > 0) {
    $query .= " WHERE " . $filtroSql;
}

$resultado_usuarios = mysqli_query($mysqli, $query);
/// agora fazer um loop exibindo os animais encontrados ou a mensagem de não encontrado 
