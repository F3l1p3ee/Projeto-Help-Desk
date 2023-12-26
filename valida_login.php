<?php 
// Usuários do sistema
    $usuarios_app = [
        ["email" => "adm@teste.com", "senha" => "123456"],
        ["email" => "user@teste.com", "senha" => "abcd"]
    ];

// Variável que verifica se a autenticação foi realizada    
    $usuario_autenticado = false;

// Validação de dados
    foreach($usuarios_app as $user){
        if($user["email"] === $_POST["email"] && $user["senha"] === $_POST["senha"]){
            $usuario_autenticado = true;
        }
    }

// Redirecionamento caso der OK
    if($usuario_autenticado){
        header("Location: home.php");
    } else {
        header("Location: index.php?login=erro");
    }
?>