<?php
    class Factory{
        //加载核心类
        private static function _loadCore($className){
           $classPath = CORE.$className.EXT;
           if(is_file($classPath)){
               include_once $classPath;
           }
        }
        //加载model类
        private static function _loadModel($className){
            $classPath = MODEL.$className.EXT;
            if(is_file($classPath)){
                include_once $classPath;
            }
        }
        //加载控制器类
        private static function _loadController($className){
            $classPath = APP.P.DS.'controller'.DS.$className.EXT;
            if(is_file($classPath)){
                include_once $classPath;
            }
        }
        private static function autoload(){
            spl_autoload_register(array('self','_loadCore'));
            spl_autoload_register(array('self','_loadModel'));
            spl_autoload_register(array('self','_loadController'));
        }
        private static function addsla(&$str){
            $str = addslashes($str);
        } 
        private static function recursive(){
            if(!get_magic_quotes_gpc()){
                array_walk_recursive($_POST, array('self','addsla'));
                array_walk_recursive($_GET, array('self','addsla'));
                array_walk_recursive($_REQUEST, array('self','addsla'));
            }
        }
        public static function _initUrl(){
            $c = C.'Controller';
            $m = M;
            $c = new $c;
            if(method_exists($c, $m)){
                $c->$m();
            }
        }
        public static function run(){
            self::recursive();
            self::autoload();
            self::_initUrl();
        }
    }
?>