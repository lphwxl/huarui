<?php 
    
    class BaseController{
       private $smarty = null;
       protected function __construct(){
           
           $this->smarty = new Smarty();
           $this->smarty->cache_dir = APP.P.DS.'cache'.DS.C;
           $this->smarty->compile_dir = APP.P.DS.'compile';
           $this->smarty->template_dir = APP.P.DS.'view'.DS.C;
           $this->smarty->left_delimiter = '<{';
           $this->smarty->right_delimiter = '}>';
       }
        
       public function assign($k,$v){
           $this->smarty->assign($k,$v);
       }
       public function display($tpl){
           $this->smarty->display($tpl);
       }
       
        
    }
    

?>