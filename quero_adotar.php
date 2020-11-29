<?php
session_start();
include_once('conexao2.php');

$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result_animais = "SELECT * FROM animais";
$resultado_animais = mysqli_query($conn, $result_animais);
$total_animais = mysqli_num_rows($resultado_animais);
$quantidade_pagina = 8;
$num_pagina = ceil($total_animais / $quantidade_pagina);
$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

$result_animais2 = "SELECT * FROM animais limit $inicio, $quantidade_pagina";
$resultado_animais = mysqli_query($conn, $result_animais2);
$total_animais = mysqli_num_rows($resultado_animais);

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

        <div class="container w-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron" id="formprincipal" style="margin-top: -70px; background-color: #f4aa24;">
                        <form class="text-center" style="color: white" action="busca.php">
                        
                            <p style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px;">
                                Encontre seu novo amigo</p>
                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <label for="inputtext1">Espécie</label>
                                    <select class="form-control" name="ani_especie" id="sel1" placeholder="Espécie">
                                        <option selected></option>
                                        <option>Gato</option>
                                        <option>Cachorro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext2">Porte</label>
                                    <select class="form-control" name="ani_porte" id="sel1" placeholder="Porte">
                                        <option selected></option>
                                        <option>Pequeno</option>
                                        <option>Medio</option>
                                        <option>Grande</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputtext3">Gênero</label>
                                    <select class="form-control" name="ani_genero" id="sel1" placeholder="Gênero">
                                        <option selected></option>
                                        <option>Femea</option>
                                        <option>Macho</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext4">Cidade</label>
                                    <select class="form-control" name="ani_cidade" id="sel1" placeholder="Cidade">
                                        <option selected></option>
                                        <option>Aparecida</option>
                                        <option>Cachoeira Paulista</option>
                                        <option>Guaratinguetá</option>
                                        <option>Lorena</option>
                                        <option>Pindamonhangaba</option>
                                        <option>Potim</option>
                                        <option>Roseira</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-danger mt-5" style="background-color:#613488; color:white; border: 1px solid #684686;">Procurar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main">
        <div class="section">
            <div class="container w-100 ">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="my-4" style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px; color: #f4aa24;">
                            Novos no Site</p>
                        <h4><span>Nosso site está cheio de peludos ansiosos pra ter uma família. Tente diferentes buscas até
                                encontrar um peludo pra chamar de seu. :) </span></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-5" id="dados">
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
                            <p>Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p>E não há recompensa maior do que vê-los se transformarem naquela coisinha alegre e saudável depois de receberem uma boa dose de cuidado e carinho. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="src/assets/img/log.png" class="img-fluid" style="border-radius: 1%" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p>Pensando bem, a pergunta é outra: se você pode mudar o destino de um animal carente, por que você não faria isso? </p>
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