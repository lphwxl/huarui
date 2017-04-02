<?php 
    class IndexController{
        public $smarty = null;
        public function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->cache_dir = APP.P.DS.'cache'.DS.M;
            $this->smarty->compile_dir = APP.P.DS.'compile';
            $this->smarty->template_dir = APP.P.DS.'view'.DS.M;
            $this->smarty->left_delimiter = '<{';
            $this->smarty->right_delimiter = '}>';
        }
        public function index(){
            session_start();
            $_SESSION['time'] = md5(uniqid().time());
            $this->smarty->assign('time',$_SESSION['time']);
            $this->smarty->display('index.html');
        }
        //验证码
        public function code(){
           $code = new code(80,30);
           $code->letterandnumbercode('./public/font/elephant.ttf');
           $code->show();
        }
        //用户登录
        public function handle(){
            session_start();
            $regUser = '/^\w{5,16}$/';
            $regPsd = '/^\w{6,20}$/';
            $regCode = '/^[a-zA-Z0-9]{4}$/'; 
            if(!($_POST['time'] === $_SESSION['time'])){
                $arr = array(
                  'error'=>0,
                    'msg'=>'非法登录'
                );
                exit(json_encode($arr));
            }
            if(!(md5(strtolower($_POST['code'])) === $_SESSION['code'])){
                $arr = array(
                    'error'=>0,
                    'msg'=>'验证码错误'
                );
                exit(json_encode($arr));
            }
            if(preg_match($regUser, $_POST['user']) && preg_match($regPsd, $_POST['psd'])){
                $where =  "`name`='{$_POST['user']}' and `psd`='".md5(md5($_POST['psd']))."'";
                $model = new Login();
                $res = $model->fileds('`id`')->w($where)->sele();
               
                if(empty($res)){
                    $arr = array(
                        'error'=>0,
                        'msg'=>'用户名或密码错误'
                    );
                    exit(json_encode($arr));
                }
               $_SESSION['user'] = $_POST['user'];
               $_SESSION['uid'] = $res[0]['id'];
               unset($_SESSION['code']);
               $arr = array(
                   'error'=>1
               );
               exit(json_encode($arr));
            }else{
                $arr = array(
                    'error'=>0,
                    'msg'=>'用户名或密码错误'
                );
                exit(json_encode($arr));
            }
        }
        //用户注销
        public function signOut(){
            session_start();
            if(isset($_SESSION['uid'])){
                $_SESSION = array();
                session_unset();
                session_destroy();
                header('location:?p=back&c=index&m=index');
            }
        }
    }



?>