<?php
//declaração dos namespaces dos controladores e instanciação dos objetos
use Project\Controller\loginController;
$loginController = new loginController();


//configuração do banco de dados
$_ENV['config'] = [
    'host' => 'localhost',
    'dbname' => 'vestidoteste',
    'user' => 'root',
    'password' => ''
];
