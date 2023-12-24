<?php 
    $dados = [
        "email" => $_POST["email"],
        "senha" => $_POST["senha"]
    ];

    echo $dados["email"] . " & " . $dados["senha"];
?>