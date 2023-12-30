<?php 

session_start();
// Remover índices do array de sessão
// echo '<pre>';
    // print_r($_SESSION);
// echo '</pre>';

// Destruir a variável de sessão
// session_destroy();

// Forçar redirecionamento
// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>';

session_destroy();
header("Location: index.php")
?>