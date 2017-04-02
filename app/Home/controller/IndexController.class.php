<?php 
    class IndexController extends HomeController{
        
        
        public function index(){
            if(!isset($_GET['cid'])){
                $admin  = new Admin();
                $res = $admin->tab('`hd_news`')->fileds('`id`,`title`,`content`')->w('`isdel`=1')->ord('`timestamp` desc')->limit('0,1')->sele();
                !empty($res)&& $this->assign('content',$res);
                $res1 = $admin->tab('`hd_news`')->fileds('`id`,`title`,`timestamp`')->w('`isdel`=1')->ord('`timestamp` desc')->limit('0,3')->sele();
                !empty($res1)&&$this->assign('title',$res1);
                $res2 = $admin->tab('`hd_corporate`')->fileds('`content`')->w('`cid`=1')->ord('`timestamp` desc')->sele();
                !empty($res2)&&$this->assign('cd_content',$res2);
                $res3 = $admin->tab('`hd_product`')->fileds('`id`,`title`,`bigimg`')->w('`isdel`=1')->ord('`timestamp` desc')->limit('0,3')->sele();
                $this->detalImg($res3);
                !empty($res3)&&$this->assign('product',$res3);
                $this->display('index.html');
                return;
            }
            if($_GET['cid'] === '2'){
                $admin = new Admin();
                $res = $admin->tab('`hd_corporate`')->ord('`timestamp` desc')->limit('0,3')->sele();
                $this->assign('content', $res);
                //从这继续
                $this->display('desc.html');
            }
            if($_GET['cid'] === '3'){
                $this->display('news.html');
            }
            if($_GET['cid'] === '4'){
                $this->display('products.html');
            }
            if($_GET['cid'] === '5'){
                $this->display('technology.html');
            }
            if($_GET['cid'] === '6'){
                $this->display('development.html');
            }
            if($_GET['cid'] === '7'){
                $this->display('human.html');
            }
            if($_GET['cid'] === '8'){
                $this->display('connection.html');
            }
        }
        
        public function detalImg(&$arr=array()){
            if(!is_array($arr)){
                return ;
            }
            foreach ($arr as $k=>&$v){
                $arrImg = explode(',', $v['bigimg']);
                $result = array_filter($arrImg,array('self','filter'));
                $res = array_pop($result);
                $v['bigimg'] = $res?$res:'';
            }
        }
        private static function filter($str){
            if(!empty($str)){
                return true;
            }
            return false;
        }
        
        
    }



?>