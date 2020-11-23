<?php

session_start();

include_once("conexao2.php");

$msg = null;
$filtroSql = null;
$totalFiltrosSql = 0;
$erros = 0;

//---| REALIZA A VALIDAÇÃO DAS ENTRADAS |---
$especie = filter_input(INPUT_GET, 'ani_especie', FILTER_SANITIZE_STRING);
if (!$especie) {
    $erros++;
    $msg .= "especie Inválido!<br>";
} else {
    $sql[] = 'ani_especie="' . $especie . '"';
}

$porte = filter_input(INPUT_GET, 'ani_porte', FILTER_SANITIZE_STRING);

if (!$porte) {
    $erros++;
    $msg .= "porte Inválido!<br>";
} else {
    $sql[] = 'ani_porte="' . $porte . '"';
}

$genero = filter_input(INPUT_GET, 'ani_genero', FILTER_SANITIZE_STRING);

if (!$genero) {
    $erros++;
    $msg .= "genero Inválido!<br>";
} else {
    $sql[] = 'ani_genero="' . $genero . '"';
}

$cidade = filter_input(INPUT_GET, 'ani_cidade', FILTER_SANITIZE_STRING);

if (!$cidade) {
    $erros++;
    $msg .= "cidade Inválido!<br>";
} else {
    $sql[] = 'ani_cidade="' . $cidade . '"';
}

$arrayCount = count(@$sql);
$i = 0;
if (!$arrayCount <= 0) {
    while ($i != $arrayCount) {
        if ($filtroSql) {
            $filtroSql .= ' AND ' . $sql[$i++];
        } else {
            $filtroSql .= $sql[$i++];
        }
    }
}

//---| INSERE O NOVO PET NO BD (PERSISTE O NOVO REGISTRO) |---
$query = "SELECT ani_id, ani_nome, ani_porte, ani_genero, ani_cidade, ani_especie, ani_descricao, ani_telefone 
          FROM animais";

$query .= " WHERE " . $filtroSql;

$resultado_animais = mysqli_query($conn, $query);
/// agora fazer um loop exibindo os animais encontrados ou a mensagem de não encontrado 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <title>Title</title>
</head>

<body>

    <div class="header">

        <?php require_once("menus_topo.php"); ?>

        <div class="section">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="src/assets/img/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="src/assets/img/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="src/assets/img/3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="container w-100 ">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <h1 class="title text-warning">Resultados</h1>

                            <h4><span>Nosso site está cheio de peludos ansiosos pra ter uma família. Tente diferentes buscas até
                                    encontrar um peludo pra chamar de seu. :) </span></h4>

                            <div class="container">
                                <div class="row justify-content-center mt-5">

                                    <?php if ((@!$sql) or ($resultado_animais->num_rows === 0)) {
                                        echo '<h3 class="">Nenhum resultado foi encontrado</h3>';
                                    } ?>
                                    <?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
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
                                    ?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="section">
                <div class="container w-100">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="my-4" style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px; color: #f4aa24;">
                                Por que adotar?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut iure maxime fugiat non
                                        ullam tempore, ipsum, consequuntur </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("rodape.php"); ?>


        <?php require_once("modal_login.php"); ?>

        <script>
            $('#myModal').modal({
                keyboard: false
            })
        </script>

        <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
        <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>