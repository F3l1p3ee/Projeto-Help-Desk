<?php require_once("validador_acesso.php") ?>

<?php 
// Abrindo o arquivo de chamados registrados para leitura
$arquivo = fopen('chamado_registrado.txt', 'r');
$chamados = [];

// Percorrendo cada uma das linhas do arquivo
while(!feof($arquivo)){
  $linha = fgets($arquivo);
  if($linha != null){
    $chamados[] = $linha;
  }
}

// Fechando o arquivo
fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
<!-- Fazendo uma iteração para capturar cada elemento da array e imprimindo entre as tags HTML -->
            <?php foreach($chamados as $chamado) { ?>
              
              <?php
                $chamados_dados = explode('#', $chamado);
                ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamados_dados[0] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[1] ?></h6>
                  <p class="card-text"><?php echo $chamados_dados[2] ?></p>

                </div>
              </div>
            
            <?php } ?>
<!-- Fim da iteração -->
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>