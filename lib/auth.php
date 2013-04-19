<?php
session_start();
class Auth{
    const LOGIN = 'login_auth';

    public static function is_login(){
        return array_key_exists('login',$_COOKIE) && $_COOKIE['login'] === self::LOGIN;
    }

    public static function do_login(){
        setcookie('login', self::LOGIN);
    }

    public static function do_logout(){
        setcookie('login', "", time() - 3600);
    }
}
