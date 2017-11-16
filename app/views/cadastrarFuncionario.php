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
    
<form>
  <fieldset>
   <center> <legend>CADASTRO DE FUNCIONÁRIO</legend></center>
   <div class="form-group">
   <label for="exampleInputNome1">Nome completo</label>
   <input type="TEXT" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  
 </div>
    <div class="form-group">
      <label for="exampleInputVestido1">Função</label>
      <input type="phone" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleInputVestido1">Endereço</label>
      <input type="phone" class="form-control" id="exampleInputPassword1" >
    </div>
    
    <div class="form-group">
      <label for="exampleInputVestido1">Telefone</label>
      <input type="phone" class="form-control" id="exampleInputPassword1" >
    </div>
    
    <div class="form-group">
    <label for="exampleInputVestido1">Email</label>
    <input type="phone" class="form-control" id="exampleInputPassword1" >
  </div>

      <div class="form-group">
      <label for="exampleInputVestido1">Salário</label>
      <input type="real" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Foto</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Foto recente do funcionário.</small>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">ENVIAR</button>
  </fieldset>
</form>
    </div>

</body>

</html>