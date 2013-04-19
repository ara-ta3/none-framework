<?php
require_once 'lib/auth.php';
require_once 'lib/helper.php';
$twig       = Helper::twig_init();
$data   = array(
    'login' => Auth::is_login(),
);
echo $twig->render('index.twig',$data);
