<?php
namespace Project\Util;
class Login
{
    public static function isLogged()
    {
        // apenas verifica se o usuário foi autenticado em algum momento
        return array_key_exists('usuario', $_SESSION) ? true : false;
          
    }
}