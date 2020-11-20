<?php
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
    <div class="header">
        <?php require_once("menus_topo.php"); ?>

        <div class="section-nome-animal">
            <div class="container">
                <h1><?php echo $row_animais['ani_nome'];  ?></h1>
            </div>
        </div>

        <div class="section-detalhes">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <figure>
                            <?php while ($rows_animais = mysqli_fetch_assoc($resultado_animais)) {
                                echo  '<img src="upload/' . $rows_animais['ani_id'] . '" width="500" height="300" class="rounded" style="border-radius: 1%" alt="...">';
                            }
                            ?>

                        </figure>

                    </div>
                    <div class="col-md-4">

                    </div>

                    <div class="col-md-3">
                        <h5><?php echo "Gênero: " . $row_animais['ani_genero'];  ?></h5>
                        <h5><?php echo "Espécie: " . $row_animais['ani_especie'];  ?></h5>
                        <h5><?php echo "Porte: " . $row_animais['ani_porte'];  ?></h5>
                        <h5><?php echo "Descrição: " . $row_animais['ani_descricao'];  ?></h5>
                        <h5><?php echo "Doador: " . $row_animais['ani_doador'];  ?></h5>
                        <h5><?php echo "Telefone: " . $row_animais['ani_telefone'];  ?></h5>
                        <h5><?php echo "Email: " . $row_animais['ani_email'];  ?></h5>
                        <h5><?php echo "Cidade: " . $row_animais['ani_cidade'];  ?></h5>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once("rodape.php"); ?>
        <?php require_once("modal_login.php"); ?>



    </div>

    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>