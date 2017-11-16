<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/index/css/styleHOME.css" rel="stylesheet">
    <style>
        
        #a{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">DREAM DRESSES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">HOME </a>
      </li>
      <li class="nav-item" action="" method="post">
        <a class="nav-link" href="/cliente">CLIENTE</a>
      </li>
      <li class="nav-item" action="" method="post">
        <a class="nav-link" href="/funcionario">FUNCIONÁRIO</a>
      </li>
      <li class="nav-item" action="" method="post">
        <a class="nav-link" href="/aluguel">ALUGUEL</a>
      </li>
      <li class="nav-item" action="" method="post">
        <a class="nav-link" href="/venda">VENDA</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-secondary my-7 my-sm-0" href="/logout" type="submit">SAIR</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1 class="display-3">Bem vindo, (nome do gerente)!</h1>
  <h2><p>O que você quer fazer agora?</p><br>
  <br>
  
  <p><a class="btn btn-primary btn-lg" href="/cadastrarCliente">Cadastrar cliente    </a></p>
  <p><a class="btn btn-primary btn-lg" href="/cadastrarVenda">Cadastrar venda      </a></p>
  <p><a class="btn btn-primary btn-lg" href="/cadastrarAluguel">Cadastrar aluguel    </a></p>
  <p><a class="btn btn-primary btn-lg" href="/cadastrarFuncionario">Cadastrar funcionário</a></p>
</div>





</body>

</html>