<?php 
    session_start();

// Usuários do sistema
    $usuarios_app = [
        ['id' => 1,"email" => "adm@teste.com", "senha" => "1234", "perfil_id" => 1],
        ['id' => 2,"email" => "user@teste.com", "senha" => "1234", "perfil_id" => 1],
        ['id' => 3,"email" => "jose@teste.com", "senha" => "1234", "perfil_id" => 2],
        ['id' => 4,"email" => "maria@teste.com", "senha" => "1234", "perfil_id" => 2]
    ];

// Variável que verifica se a autenticação foi realizada    
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil = null;

// Perfis de usuário
    $perfil = [
        1 => "Administrativo",
        2 => "Usuário"
    ];

// Validação de dados
    foreach($usuarios_app as $user){
        if($user["email"] === $_POST["email"] && $user["senha"] === $_POST["senha"]){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil = $user['perfil_id'];
        }
    }

// Redirecionamento caso der OK
    if($usuario_autenticado){
        echo "Usuário autenticado";
        $_SESSION["autenticado"] = "SIM";
        $_SESSION["id_user"] = $usuario_id; // Identificador de cada usuário
        $_SESSION["perfil_id"] = $usuario_perfil; // Identificador do perfil de cada usuário
        header("Location: home.php");
    } else {
        $_SESSION["autenticado"] = "NÃO";
        header("Location: index.php?login=erro");
    }
?>