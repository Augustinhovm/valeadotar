<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <title>Cadastrar Animais</title>
</head>

<body>
    <div class="header">

        <!--| MENU TOPO |--->
        <?php require_once("menus_topo.php"); ?>
        <!--| /MENU TOPO |--->

        <!--| CARROSSEL |--->
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
        <!--| /CARROSSEL |--->


        <div class="container jumbotron mt-5 " style="background-color: #f4aa24;">
            <div class="row ">

                <?php
                //required = null;
                $required = ' required';
                ?>

                <form class="needs-validation" novalidate method="POST" action="insert.php" enctype="multipart/form-data">
                    <div id="mensagem"></div>
                    <?php

                    if (!array_key_exists('Login', $_SESSION)) {

                        echo '<div class="alert alert-danger">PARA DOAR, REALIZE LOGIN!</div>';
                    } else {

                    ?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName4" class="">Digite o nome do animal</label>
                                <input type="text" name="ani_nome" class="form-control" placeholder="Nome do animal" <?= $required ?>>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="inputName4">Escolha porte do animal</label>
                                <select class="form-control" name="ani_porte" id="sel1" placeholder="Porte" <?= $required ?>>
                                    <option selected></option>
                                    <option>Pequeno</option>
                                    <option>Medio</option>
                                    <option>Grande</option>
                                </select>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName4">Escolha o gênero do animal</label>
                                <select class="form-control" name="ani_genero" id="sel1" placeholder="Gênero" <?= $required ?>>
                                    <option selected></option>
                                    <option>Femea</option>
                                    <option>Macho</option>

                                </select>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName4">Escolha a cidade do animal</label>
                                <select class="form-control" name="ani_cidade" id="sel1" placeholder="Cidade" <?= $required ?>>
                                    <option selected></option>
                                    <option>Aparecida</option>
                                    <option>Cachoeira Paulista</option>
                                    <option>Guaratinguetá</option>
                                    <option>Lorena</option>
                                    <option>Pindamonhangaba</option>
                                    <option>Potim</option>
                                    <option>Roseira</option>

                                </select>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName4">Escolha a espécie do animal</label>
                                <select class="form-control" name="ani_especie" id="sel1" placeholder="Espécie" <?= $required ?>>
                                    <option selected></option>
                                    <option>Gato</option>
                                    <option>Cachorro</option>

                                </select>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputName4">Digite a descrição do animal</label>
                                <input type="text" name="ani_descricao" class="form-control" placeholder="Descrição do animal" <?= $required ?>>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputName4">Digite seu Telefone para contato:</label>
                                <input type="number" name="ani_telefone" class="form-control" placeholder="Telefone" <?= $required ?>>
                                <div class="invalid-feedback">Campo obrigatório!</div>
                            </div>

                            <div class="form-group col-md-6">

                                <input type="file" <?= $required ?> name="arquivo">
                                <div class="invalid-feedback">Campo obrigatório!</div>

                            </div>
                            <div class="form-group col-12 text-center">
                                <?php

                                if (array_key_exists("msg_erro", $_GET)) {

                                    echo '<div class="alert alert-danger">' . $_GET['msg_erro'] . '</div>';
                                }

                                if (array_key_exists("msg_success", $_GET)) {

                                    echo '<div class="alert alert-success">' . $_GET['msg_success'] . '</div>';
                                }

                                ?>
                            </div>

                            <div class="form-group col-12 text-center">
                                <button type="submit" class="btn btn-lg btn-primary mt-3" style="background-color:#613488; color:white; border: 1px solid #684686;">Cadastrar Animal</button>
                            </div>

                        </div>
                </form>

            <?php
                    } //---| fecha o IF
            ?>

            </div>
        </div>
        <?php require_once("rodape.php"); ?>

        <?php require_once("modal_login.php"); ?>


        <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
        <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
</body>

</html>