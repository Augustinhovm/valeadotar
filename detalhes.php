<?php
include_once('conexao2.php');
$ani_id = $_GET['ani_id'];
$result_animais = "SELECT * FROM animais WHERE ani_id='$ani_id'";
$resultado_animais = mysqli_query($conn, $result_animais);
$row_animais = mysqli_fetch_assoc($resultado_animais);

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

    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>