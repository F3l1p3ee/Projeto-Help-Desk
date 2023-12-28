<?php 
  session_start();
  
// O código verifica se o usuário está autenticado. Caso não esteja e queira acessar esta página, ele será redireciondo para a página index.php e com uma msg de erro diferente
  if(!isset($_SESSION["autenticado"]) or $_SESSION["autenticado"] != "SIM"){
    header("Location: index.php?login=erro2");
  }
?>