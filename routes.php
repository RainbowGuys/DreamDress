<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':

        require './app/views/index.php';
        break;

    case '/login':
        $loginController->login();
        break;
    
    case '/logout':
        $loginController->logout();
        break;
    
    case '/home':
    require './app/views/home.php';
        break;
    
    case '/cliente':
    require './app/views/cliente.php';
        break;
    
    case '/funcionario':
    require './app/views/funcionario.php';
        break;
    
    case '/aluguel':
    require './app/views/aluguel.php';
        break;

    case '/venda':
    require './app/views/venda.php';
        break;

    case '/cadastrarCliente':
        require './app/views/cadastrarCliente.php';
        break;
    case '/cadastrarVenda':
        require './app/views/cadastrarVenda.php';
        break;
    case '/cadastrarAluguel':
        require './app/views/cadastrarAluguel.php';
        break;
     case '/cadastrarFuncionario':
        require './app/views/cadastrarFuncionario.php';
        break;
    
    case '/logout':
        session_destroy();
        header('Location: /');
        break;
    
    default:
        die('Essa rota não é valida');
        break;
}
