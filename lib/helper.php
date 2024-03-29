<?php
require_once __DIR__.'/../vendor/twig/twig/lib/Twig/Autoloader.php';
class Helper{
    public static function twig_init(){
        Twig_Autoloader::register();
        $loader     = new Twig_Loader_Filesystem(__DIR__.'/../template/');
        $twig       = new Twig_Environment($loader);
        $twig->addGlobal('base','./');
        return $twig; 
    }
}
