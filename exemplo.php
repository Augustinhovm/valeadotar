<?php
require_once("valida_usuario_autenticado.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <h1>ESTA PÁGINA SÓ PODE SER VISTA POR USUÁRIO AUTENTICADO.</h1>
  <a href='logout.php' class='btn btn-info'>LOGOUT</a>
</body>

</html>