<?php 

session_start();

//VALIDA SE O USUÁRIO TÁ LOGADO
if (!$_SESSION['Login']) :
  header("Location: index.php");
  die;
endif;

?>