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

    <?php require_once("menus_topo.php"); ?>

    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <div class="container jumbotron mt-5 " style="background-color: #f4aa24;">
      <div class="row ">
        <form method="POST" action="cadastro.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName4">Nome:</label>
              <input type="text" name="nome" class="form-control" placeholder="Digite seu nome: " required><br><br>
            </div>
            <div class="form-group col-md-6">
              <label for="inputName4">Cidade:</label>
              <input type="text" name="cidade" class="form-control" placeholder="Digite sua cidade: " required><br><br>
            </div>
            <div class="form-group col-md-6">
              <label for="inputName4">Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Digite seu email: " required><br><br>
            </div>
            <div class="form-group col-md-6">
              <label for="inputName4">Senha:</label>
              <input type="password" name="senha" class="form-control" placeholder="Digite sua senha: " required><br><br>
            </div>
            <div class="form-group col-md-6">
              <label for="inputName4">Telefone:</label>
              <input type="number" name="telefone" class="form-control" placeholder="Digite seu telefone: " required><br><br>
            </div>
            <div class="form-group col-md-6">
              <label for="inputName4">Endereço:</label>
              <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço: " required><br><br>
            </div>

            <div class="form-group col-12 text-center">
              <input type="submit" class="btn btn-primary ml-5 mt-3 col-sm-5" style="background-color:#613488; color:white; border: 1px solid #684686;" value="Cadastrar"></input>
            </div>
          </div>
        </form>

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