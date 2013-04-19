<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
require_once 'lib/auth.php';
require_once 'lib/helper.php';
$twig       = Helper::twig_init();
$template   = $twig->loadTemplate('index.twig');
$data   = array(
    'login' => Auth::is_login(),
);
echo $template->render($data);
