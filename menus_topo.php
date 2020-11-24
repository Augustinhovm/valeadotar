<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:#613488 solid 1px">

   <a class="navbar-brand" href="index.php">
        <img src="src/assets/img/Valeadotar.png" class="img-fluid my-2" alt="Vale adotar!" loading="lazy">
   </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Início </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="quero_adotar.php">Quero Adotar</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="quero_doar.php">Quero Doar</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
          <?php
          //SE O USUÁRIO NÃO ESTIVER AUTENTICADO, EXIBE O BOTÃO "CADASTRO"
          if (!array_key_exists('Login', $_SESSION)) {
              echo '<a href="cadastromain.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #3a1e53">Cadastro</a>';
          } else //SE ESTIVER AUTENTICADO, ESCONDE O BOTÃO CADASTRO"
          {
              echo '<a href="meus_pets.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #3a1e53">Meus Pets</a>';
          }
          ?>

          <?php
          //SE O USUÁRIO NÃO ESTIVER AUTENTICADO, EXIBE O BOTÃO "LOGIN"
          if (!array_key_exists('Login', $_SESSION)) {
              echo '<input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24" value="Login"></input>';
          } else //SE ESTIVER AUTENTICADO, EXIBE O BOTÃO "LOGOUT"
          {
              echo '<a href="logout.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24">Logout</a>';
          }
          ?>
    </form>
  </div>
</nav>