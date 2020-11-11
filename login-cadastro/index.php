<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../src/node_modules/bootstrap/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="../src/assets/css/style.css">
        <meta charset="utf-8">
        <title>Cadastrar</title>
    </head>
    <body>
        <div class="header">
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
                        <a class="nav-link" href="../inserir_animais/index.php">Quero Doar</a>
                    </li>
                    
                </ul>
            </div>

        </nav>


    
       
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
        <div class="container jumbotron mt-5 " style="background-color: #f4aa24;">
             <div class="row ">
          <form method="POST" action="cadastro.php">
            <div class="form-row">
            <div class="form-group col-md-6">
            <label  for="inputName4">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome: " required><br><br>
            </div>
            <div class="form-group col-md-6">
            <label  for="inputName4">Cidade:</label>
            <input type="text" name="cidade" class="form-control" placeholder="Digite sua cidade: " required><br><br>
            </div>
            <div class="form-group col-md-6">
            <label  for="inputName4">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu email: " required><br><br>
            </div>
            <div class="form-group col-md-6">
            <label  for="inputName4">Senha:</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha: " required ><br><br>
            </div>
            <div class="form-group col-md-6">
            <label  for="inputName4">Telefone:</label>
            <input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone: " required><br><br>
            </div>
            <div class="form-group col-md-6">
            <label  for="inputName4">Endereço:</label>
            <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço: " required><br><br>
            </div>

            <div class="ml-5 mt-3 col-sm-5 text-center">
            <input type="submit" class="btn btn-primary ml-5 mt-3 col-sm-5" style="background-color:#613488; color:white; border: 1px solid #684686;" value="Cadastrar"></input>
            </div> 
            </div>
        </form>
              
            </div>
        </div>     
    </body>
</html>