<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea

session_start();

//VALIDA SE O USUÁRIO TÁ LOGADO
if (!$_SESSION['Login']) :
  header("Location: index.php");
  die;
endif;
<<<<<<< HEAD
=======

?>
>>>>>>> c95243dea7c77fe8f09a38852391bf2de51d7aea
