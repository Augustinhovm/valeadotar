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

    <script src="src/node_modules/bootstrap/dist/js/jquery-3.5.1.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>