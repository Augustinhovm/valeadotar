<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/assets/css/style.css">
    <title>Cadastrar Animais</title>
</head>

<body>
    <div class="header">

        <!--| MENU TOPO |--->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #613488;">
            <a class="navbar-brand" href="#">
                <img src="../src/assets/img/log.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Início </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Quero Adotar</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Quero Doar</a>
                    </li>
                   
                </ul>
            </div>
             <form class="form-inline">
                <button class="navbar-toggler" type="button" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="../login-cadastro/index.php"><input type="button" class="btn btn-danger mx-3" style="background-color:#613488; color:white; border: 1px solid #3a1e53;" value="Cadastro"></a></input>
                <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24" value="Login"></input>
            </form>

        </nav>
        <!--| /MENU TOPO |--->

        <!--| CARROSSEL |--->
        <div class="section">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../src/assets/img/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../src/assets/img/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../src/assets/img/3.png" class="d-block w-100" alt="...">
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

                <form class="needs-validation" novalidate  method="POST" action="insert.php"  enctype="multipart/form-data">
                    <div id="mensagem"></div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName4" class="">Digite o nome do animal</label>
                            <input type="text" name="ani_nome" class="form-control" placeholder="Nome do animal"  <?=$required?> >
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="inputName4">Escolha porte do animal</label>
                            <select class="form-control" name="ani_porte" id="sel1" placeholder="Porte"  <?=$required?> >
                            <option selected></option>
                            <option>Pequeno</option>
                            <option>Medio</option>
                            <option>Grande</option>
                            </select>
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName4">Escolha o gênero do animal</label>
                            <select class="form-control" name="ani_genero" id="sel1" placeholder="Gênero"  <?=$required?> >
                            <option selected></option>
                            <option>Femea</option>
                            <option>Macho</option>
                            
                            </select>
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName4">Escolha a cidade do animal</label>
                            <select class="form-control" name="ani_cidade" id="sel1" placeholder="Cidade"  <?=$required?> >
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
                            <select class="form-control" name="ani_especie" id="sel1" placeholder="Espécie"  <?=$required?> >
                            <option selected></option>
                            <option>Gato</option>
                            <option>Cachorro</option>
                            
                            </select>
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName4">Digite a descrição do animal</label>
                            <input type="text" name="ani_descricao" class="form-control" placeholder="Descrição do animal"  <?=$required?> >
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>

                         <div class="form-group col-md-6">
                            <label for="inputName4">Digite seu Telefone para contato:</label>
                            <input type="number" name="ani_telefone" class="form-control" placeholder="Telefone"  <?=$required?> >
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        </div>

                        <div class="form-group col-md-6">
                            
                            <input type="file"  <?=$required?>  name="arquivo">
                            <div class="invalid-feedback">Campo obrigatório!</div>
                        
                        </div>
                        <div class="form-group col-12 text-center">
                         <?php

                            if(array_key_exists("msg_erro", $_GET)) {

                                echo '<div class="alert alert-danger">'.$_GET['msg_erro'].'</div>';

                            }

                            if(array_key_exists("msg_success", $_GET)) {

                                echo '<div class="alert alert-success">'.$_GET['msg_success'].'</div>';

                            }

                        ?>
                        </div>
                        
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn btn-lg btn-primary mt-3" style="background-color:#613488; color:white; border: 1px solid #684686;">Cadastrar Formulário</button>
                        </div>
                        
                    </div>  
                </form>              
            </div>
        </div>
        <div class="footer">
            <div class="jumbotron mt-5 mb-0" style="background-color: #684686; border-radius: 0;">
                <div class="row">
                    <div class="col-md-12 text-center text-light">
                        <div class="row">
                            <div class="col-md-3">
                                <p>Quer um Amigo?</p>
                                <span>Adoção reponsável</span><br>
                                <span>Procure um amigo</span><br>
                                <span>Inspire-se</span><br>
                            </div>
                            <div class="col-md-3">
                                <p>Quem somos</p>
                                <span>Sobre nós</span><br>
                                <span>Perguntas frequentes</span><br>
                                <span>Fale conosco</span><br>
                            </div>
                            <div class="col-md-3">
                                <p>Melhores Amigos</p>
                                <span>Dicas e cuidados</span><br>
                                <span>Guarda responsável</span><br>
                                <span>Não perca seu amigo</span><br>
                            </div>
                            <div class="col-md-3 my-3">
                                <img src="../src/assets/img/logofooter.png" class="img-fluid mb-4" style="width: 50%; border-radius: 1%" alt="...">
                                <span>FALE@AMIGONAOSECOMPRA.COM.BR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Login Vale Adotar </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="logar.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login"></input>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #f4aa24; color:white; border: 1px solid #f4aa24;" value="Fechar"></input>
                    <input type="submit" class="btn btn-primary" style="background-color:#613488; color:white; border: 1px solid #684686;" value="Logar"></input>
                </div>
            </div>char
        </div>
    </div>

        <script src="../src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
        <script src="../src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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