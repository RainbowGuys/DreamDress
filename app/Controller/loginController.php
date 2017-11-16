<?php
namespace Project\Controller;
use Project\Db\QueryBuilder;
class LoginController
{
    public function login()
        {
            $dados['rg'] = htmlentities($_POST['rg'], ENT_QUOTES);
            $dados['password'] = htmlentities($_POST['password'], ENT_QUOTES);
            $dados['password'] = crypt($dados['password'], '4342');
            
            $q = new QueryBuilder();
            
            $cadastrou = $q->select('usuario', [
                'rg' => $dados['rg'], 
                'password' => $dados['password']
            ]);
           
            // se o usuário não foi encontrado no banco de dados
            // emite uma mensagem de erro
            
            // autentica o usuário
            $_SESSION['usuario'] = $dados['rg'];
            
            header('Location: /home');
        }
public function logout(){
            //remove todas variáveis criadas de sessão
            session_unset();
            //devolve para a página inicial
            header('Location: /');
        }
    
    }
