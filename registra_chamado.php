<?php 
session_start();

// Tratando os textos caso haja presença de #
$titulo = str_replace("#", " ", $_POST["titulo"]);
$categoria = str_replace("#", " ", $_POST["categoria"]);
$descricao = str_replace("#", " ", $_POST["descricao"]);

// Criando e abrindo o arquivo
$chamado_registrado = fopen("../../app_help_desk/chamado_registrado.txt", "a");

$texto = $_SESSION['id_user'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// Escrevendo no arquivo o conteúdo
fwrite($chamado_registrado, $texto);

// Fechando o arquivo
fclose($chamado_registrado);
header("Location: abrir_chamado.php");
?> 