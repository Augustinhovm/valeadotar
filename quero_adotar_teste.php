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
                        <form class="text-center" style="color: white">
                            <p style="font-size: 40px; font-family: cursive; text-align: center; margin-top: -20px;">
                                Encontre seu novo amigo</p>
                            <div class="form-row ">
                                <div class="form-group col-md-6">
                                    <label for="inputtext1">Espécie</label>
                                    <select class="form-control" name="ani_especie" id="sel1" placeholder="Espécie" required>
                                        <option selected></option>
                                        <option>Gato</option>
                                        <option>Cachorro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext2">Porte</label>
                                    <select class="form-control" name="ani_porte" id="sel2" placeholder="Porte" required>
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
                                    <select class="form-control" name="ani_genero" id="sel3" placeholder="Gênero" required>
                                        <option selected></option>
                                        <option>Femea</option>
                                        <option>Macho</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputtext4">Cidade</label>
                                    <select class="form-control" name="ani_cidade" id="sel4" placeholder="Cidade" required>
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
                                <button type="button" class="btn btn-danger mt-5" id="buscar" style="background-color:#613488; color:white; border: 1px solid #684686;">Procurar</button>
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


        <?php
        require_once("resultado_busca.php");

        ?>
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

    <script>
        $('#buscar').click(function() {
            var palavra1 = $("#sel1").val()
            var palavra2 = $("#sel2").val()
            var palavra3 = $("#sel3").val()
            var palavra4 = $("#sel4").val()
            //  var palavra3 = $(#palavra3)



            var page = "busca.php";
            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function() {
                    $("#dados").html("Carregando...");
                },
                data: {
                    palavra1: palavra1,
                    palavra2: palavra2,
                    palavra3: palavra3,
                    palavra4: palavra4
                },

                success: function(msg) {
                    $("#dados").html(msg);
                }
            });


        });


        $('#buscar').click(function() {
            buscar($("#palavra").val())
        });
    </script>


</body>

</html>