<?php

session_start();

if (!$_SESSION['Login']) :

  header("Location: index.php");
  die;

endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola- augustinho</h1>
    
</body>
</html>