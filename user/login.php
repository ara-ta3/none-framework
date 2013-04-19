<?php
require_once '../lib/auth.php';
require_once '../lib/helper.php';
if(Auth::is_login()){
    header('Location: ./');
    exit;
}
$user_id    = '';
$error      = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['user_id']   === 'sample' && $_POST['password'] === 'sample'){
        Auth::do_login();
        header('Location: ./');
        exit;
    }else{
        $user_id    = htmlspecialchars($_POST['user_id'], ENT_QUOTES, 'utf-8');
        $error      = 'id か passwordが間違ってます';
    }
}

$twig       = Helper::twig_init();
$data   = array(
    'login' => Auth::is_login(),
    'base'  => '../',
    'error'  => $error,
    'user_id'   => $user_id,
);
echo $twig->render('user/login.twig',$data);
