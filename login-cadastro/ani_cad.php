<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/assets/css/style.css">
        <meta charset="utf-8">
        <title>Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar Animais</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="cadastro_animal.php">
            <label>Nome do Animal:</label>
            <input type="text" name="nome" placeholder="Digite o nome do animal: "><br><br>
            <label>Gênero do Animal:</label>
            <input type="text" name="genero" placeholder="Digite o gênero do animal: "><br><br>
            <label>Espécie do Animal:</label>
            <input type="text" name="especie" placeholder="Digite a espécie do animal: "><br><br>
            <label>Porte do Animal:</label>
            <input type="text" name="porte" placeholder="Digite o porte do animal: "><br><br>
            <label>Cidade do Animal:</label>
            <input type="text" name="cidade" placeholder="Digite sua cidade: "><br><br>
            <label>Descrição do Animal:</label>
            <input type="text" name="descricao" placeholder="Digite a descrição do animal: "><br><br>
            <label>Email de Contato:</label>
            <input type="email" name="email" placeholder="Digite o email de contato: "><br><br>
            <label>Telefone de Contato:</label>
            <input type="text" name="telefone" placeholder="Digite o telefone de contato: "><br><br>
            
            <input type="submit" value="Cadastrar"> 
        </form>
    </body>
</html>