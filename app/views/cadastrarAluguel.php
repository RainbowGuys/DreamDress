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
   <center> <legend>CADASTRO DE ALUGUEL</legend></center>
   <div class="form-group">
      <label for="exampleInputNome1">Código do cliente</label>
      <input type="TEXT" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
     
    </div>
    
    <div class="form-group">
      <label for="exampleInputVestido1">Tipo de vestido</label>
      <input type="TEXT" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleInputVestido1">Data do aluguel</label>
      <input type="DATE" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleInputVestido1">Data de devolução</label>
      <input type="DATE" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Forma de pagamento</label>
      <select class="form-control" id="exampleSelect1">
      <option></option>
      <option>A vista</option>
        <option>Cartão de crédito (Débito)</option>
        <option>Cartão de crédito (Crédito)</option>
        <option>Cheque</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputVestido1">Funcionário responsável pelo atendimento</label>
      <input type="text" class="form-control" id="exampleInputPassword1" >
      <small id="emailHelp" class="form-text text-muted">Nome</small>
    </div>
    <button type="submit" class="btn btn-primary">ENVIAR</button>
  </fieldset>
</form>
    </div>

</body>

</html>