<?php
<<<<<<< HEAD
session_start();
include_once('conexao2.php');
$ani_id = $_GET['ani_id'];
$result_animais = "SELECT * FROM animais WHERE ani_id='$ani_id'";
$resultado_animais = mysqli_query($conn, $result_animais);
$row_animais = mysqli_fetch_assoc($resultado_animais);
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result_animais = "SELECT * FROM animais WHERE ani_id='$ani_id'";
$resultado_animais = mysqli_query($conn, $result_animais);
$total_animais = mysqli_num_rows($resultado_animais);
=======
  include_once('conexao2.php');
  $ani_id = $_GET['ani_id'];
  $result_animais = "SELECT * FROM animais WHERE ani_id='$ani_id'";
  $resultado_animais = mysqli_query($conn, $result_animais);
  $row_animais = mysqli_fetch_assoc($resultado_animais);
>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/style.css">
    <title>Detalhes</title>
</head>

<body>
<<<<<<< HEAD

    <style type="text/css">
        .row {
            font-family: 'Titillium Web', sans-serif;
        }

        .section-nome-animal {
            font-family: 'Titillium Web', sans-serif;
        }
    </style>

    <div class="header">
        <?php require_once("menus_topo.php"); ?>
        <div class="container">


            <div class="section-nome-animal">
                <div class="container">
                    <div class="text-center">
                        <br>
                        <h1><?php echo $row_animais['ani_nome'];  ?></h1>
                    </div>
                </div>
            </div>

            <div class="section-detalhes">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <figure>
                                <?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
                                    echo  '<img src="upload/' . $rows_animais['ani_id'] . '" width="600" height="400" class="rounded" style="border-radius: 1%" alt="...">';
                                }
                                ?>

                            </figure>

                        </div>
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-3 jumbotron">
                            <h6><?php echo "Gênero: " . $row_animais['ani_genero'];  ?></h6>
                            <h6><?php echo "Espécie: " . $row_animais['ani_especie'];  ?></h6>
                            <h6><?php echo "Porte: " . $row_animais['ani_porte'];  ?></h6>
                            <h6><?php echo "Descrição: " . $row_animais['ani_descricao'];  ?></h6>
                            <h6><?php echo "Doador: " . $row_animais['ani_doador'];  ?></h6>
                            <h6><?php echo "Telefone: " . $row_animais['ani_telefone'];  ?></h6>
                            <h6><?php echo "Email: " . $row_animais['ani_email'];  ?></h6>
                            <h6><?php echo "Cidade: " . $row_animais['ani_cidade'];  ?></h6>
                        </div>

                    </div>
                    <br><br>
                    <div class="text-center"><a href="quero_adotar.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24">Voltar</a> </div>
                </div>

            </div>
            <br>

            <div class="texto_importante">
                <div class="row">
                    <div class="container  jumbotron">
                        <h1>Atenção!</h1>
                        <br>
                        <h6>Não permitimos a venda de animais através do site. No entanto, alguns protetores solicitam uma taxa de adoção para ajudar nos custos com resgates e cuidados necessários. Se estiver inseguro quanto à seriedade da cobrança, escreva para Valeadotar@gmail.com.</h6>
                        <br>
                        <h2>E antes de adotar, lembre-se:</h2>
                        <br>
                        <h6>Animais têm sentimentos. Eles precisam de carinho e atenção todos os dias.</h6>
                        <h6>Todos os moradores da casa devem estar de acordo com a adoção.</h6>
                        <h6>Ao viajar, precisará deixá-lo com alguém de confiança.</h6>
                        <h6>Você terá despesas com ração, vacinas e veterinário.</h6>
                        <h6>Cães e gatos vivem 15 anos ou mais e você será responsável por cuidar dele durante todo esse tempo. ;)</h6>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php"); ?>
        <?php require_once("modal_login.php"); ?>




    </div>
=======
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #613488;">
            <a class="navbar-brand" href="#">
                <img src="src/assets/img/log.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Início </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Quero Adotar</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="inserir_animais/index.php">Quero Doar</a>
                    </li>

                </ul>
            </div>
            <form class="form-inline">
                <button class="navbar-toggler" type="button" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="login-cadastro/index.php"><input type="button" class="btn btn-danger mx-3" style="background-color:#613488; color:white; border: 1px solid #3a1e53;" value="Cadastro"></a></input>
                <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24" value="Login"></input>
            </form>
        </nav>

        <div class="section-nome-animal">
            <div class="container">
                <h1><?php echo $row_animais['ani_nome'];  ?></h1>
            </div>
        </div>

        <div class="section-detalhes">
           <div class="container mt-5">
              <div class="row">
                    <div class="col-md-5 jumbotron">
                        <figure>
                            <img src="https://picsum.photos/400/250" alt="">
                        
                        </figure>
                    
                    </div>

                    <div class="col-md-5">
                        

                    </div>
              </div>
           </div>
        </div>

       
        
    </div>

>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea
    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>