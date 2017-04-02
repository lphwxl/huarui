<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('EXT','.class.php');
    define('ROOT', str_replace('\\', DS,dirname(dirname(__FILE__))));
    $config = include_once ROOT.DS.'config'.DS.'config.php';
    include_once ROOT.DS.'config'.DS.'function.php';
    //获取参数
    $plan = isset($_GET['p'])?$_GET['p']:'home';
    $c = isset($_GET['c'])?$_GET['c']:'index';
    $m = isset($_GET['m'])?strtolower($_GET['m']):'index';
    
    //大小写转换
    $plan = ucfirst(strtolower($plan));
    $c = ucfirst(strtolower($c));
    define('P', $plan);
    define('C', $c);
    define('M', $m);
    define('CORE', ROOT.DS.'core'.DS);
    define('APP', ROOT.DS.'app'.DS);
    define('MODEL',ROOT.DS.'app'.DS.'Model'.DS);
    
    //公共文件路径
    define('CSS', './public/'.P.'/css/');
    define('JS', './public/'.P.'/js/');
    define('IMG', './public/'.P.'/images/');
    //加载smarty类
    include_once ROOT.DS.'core'.DS.'smarty'.DS.'Smarty.class.php';
    include_once ROOT.DS.'core'.DS.'Factory.class.php';
    include_once  ROOT.DS.'core'.DS.'phpmailer'.DS.'class.phpmailer.php';
    include_once  ROOT.DS.'core'.DS.'phpmailer'.DS.'class.smtp.php';
    
    Factory::run();
    
?>