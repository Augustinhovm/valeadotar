<?php
session_start();

//SE O USUÁRIO NÃO ESTIVER AUTENTICADO, FAZ O ENVIO DO LOGIN
if (!array_key_exists('Login', $_SESSION)) {
	require_once("logar.php");
}

include_once('conexao2.php');

$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result_animais = "SELECT * FROM animais WHERE usuario_id=".$_SESSION['Login']['usuario_id'];
$resultado_animais = mysqli_query($conn, $result_animais);
$total_animais = ($resultado_animais)?mysqli_num_rows($resultado_animais):0;
$quantidade_pagina = 8;
$num_pagina = ceil($total_animais / $quantidade_pagina);
$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;
/*
$result_animais2 = "SELECT * FROM animais WHERE id_cliente=".$_SESSION['Login']['usuario_id']." limit $inicio, $quantidade_pagina";
$resultado_animais = mysqli_query($conn, $result_animais2);
$total_animais = mysqli_num_rows($resultado_animais);
*/
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

    </div>

    <div class="main">
        <div class="section">
            <div class="container w-100 ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="my-4" style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px; color: #f4aa24;">
                            MEUS PETS!</p>
                        <h4><span>Modifique informações ou remova o anuncio após doação :) </span></h4>
                        <?php echo $_SESSION['Login']['usuario_id']; ?>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row justify-content-center mt-5">

                <?php 
                if($resultado_animais)
                {
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
                }
                else
                {
                    echo "Vc não registrou algum pet!!!";
                }
                
                ?>
            </div>
        </div>

        <?php
        $pagina_anterior = $pagina - 1;
        $pagina_posterior = $pagina + 1;
        ?>




        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <?php
                    if ($pagina_anterior != 0) { ?>
                        <a class="page-link" href="quero_adotar.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php } else { ?>
                    <?php } ?>
                </li>
                <?php
                for ($i = 1; $i < $num_pagina + 1; $i++) { ?>
                    <li class="page-item"><a class="page-link" href="quero_adotar.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                <?php } ?>

                <li class="page-item">
                <li class="page-item">
                    <?php
                    if ($pagina_posterior <= $num_pagina) { ?>
                        <a class="page-link" href="quero_adotar.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php } else { ?>
                    <?php } ?>
                </li>
            </ul>
        </nav>
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