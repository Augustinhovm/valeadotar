<?php
  try{
      $pdo = new PDO('mysql:host=localhost;dbname=valeadotar_tcc;charset=utf8', 'root', '');
  }catch(PDOException $e){
      echo $e->getMessage()."</p>";
      die("NÃO FOI POSSIVEL ESTABELECER A CONEXÃO COM O BANCO DE DADOS");
  }