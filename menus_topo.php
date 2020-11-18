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
        <a href="cadastromain.php"><input type="button" class="btn btn-danger mx-3" style="background-color:#613488; color:white; border: 1px solid #3a1e53;" value="Cadastro"></a></input>

        <?php
        //SE O USUÁRIO NÃO ESTIVER AUTENTICADO, EXIBE O BOTÃO "LOGIN"
        if (!array_key_exists('Login', $_SESSION)) {
            echo '<input type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24" value="Login"></input>';
        } else //SE ESTIVER AUTENTICADO, EXIBE O BOTÃO "LOGOUT"
        {
            echo '<a href="logout.php" class="btn btn-warning" style="color:white; border: 1px solid #ffffff; background-color: #f4aa24">LOGOUT</a>';
        }
        ?>

    </form>
</nav>