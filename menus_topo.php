
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #613488;">
    <a class="navbar-brand" href="index.php">
        <img src="src/assets/img/log.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
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
    </div>
    <form class="form-inline">
        <button class="navbar-toggler" type="button" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        //SE O USUÁRIO NÃO ESTIVER AUTENTICADO, EXIBE O BOTÃO "CADASTRO"
        if (!array_key_exists('Login', $_SESSION)) {
            echo '<a href="cadastromain.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #3a1e53">Cadastro</a>';
        } else //SE ESTIVER AUTENTICADO, ESCONDE O BOTÃO CADASTRO"
        {
            echo "";
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
</nav>

    
