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


while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
    echo '<div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="card" style="width: 16rem;" >
                                 <img src="upload/' . $rows_animais['ani_id'] . '" width="200" height="200" class="card-img-top " style="border-radius: 1%" alt="...">
                                    <div class="card-body text-left"   style="color: #684686; ">                        
                                        <p>Nome: ' . $rows_animais['ani_nome'] . '</p>
                                        <p>Porte: ' . $rows_animais['ani_porte'] . '</p>
                                        <p>Cidade: ' . $rows_animais['ani_cidade'] . '</p>
                                        <p>Gênero: ' . $rows_animais['ani_genero'] . '</p>
                                        <p>Espécie: ' . $rows_animais['ani_especie'] . '</p>                        
                                        <div class="form-group col-12 text-center"> 
                                            <a href="detalhes.php?ani_id=' . $rows_animais['ani_id'] . ' class="btn btn-light" style="border: 1px solid #684686;">Adotar</a>
                                        </div>
                                    </div>
                            </div>
                        </div>';
}
