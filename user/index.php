<?php
require_once '../lib/auth.php';
require_once '../lib/helper.php';
if(!Auth::is_login()){
    header('Location: ../');
    exit;
}

$username   = 'sample_user';
$twig       = Helper::twig_init();
$data   = array(
    'login' => Auth::is_login(),
    'base'  => '../',
    'username'  => $username,
);
echo $twig->render('user/index.twig',$data);
