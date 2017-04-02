<?php 
    
    class BackController extends BaseController{
        public function __construct(){
            parent::__construct();
            session_start();
            $this->assign('username', $_SESSION['user']);
            if(!isset($_SESSION['uid'])){
                header('location:?p=back&c=index&m=index');
            }
            $admin = new Admin();
            $res = $admin->tab('hd_list')->sele();
            !empty($res)&&$this->assign('data',$res);
           
        }
      
        public function success($tpl,$res=false,$c='admin'){
            if($res){
                $sid = isset($_GET['sid'])?'&sid='.$_GET['sid']:'';
                $this->display($tpl);
                if(isset($_GET['a'])){
                    $str = <<<str
                   <script>
                       var timer = null;
                       var ids = '&a=';
                       ids += {$_GET['a']} || '';
                       $('#success,#s_time').css('display','block');
                        var second = 4;
                        timer = setInterval(function(){
                            if(!isNaN(second) && second > 0){
                                $('#second').html(second);
                                second --;
                            }else{
                                clearInterval(timer);
                                 window.location.href = '?p=back&c={$c}&m=show{$sid}'+ids; 
                            }
                        },1000);
            
                       </script>
str;
                    echo $str;
                    return;
                }
                $str = <<<str
                   <script>
                       var timer = null;
                        $('#success,#s_time').css('display','block'); 
                        var second = 4;
                        timer = setInterval(function(){
                            if(!isNaN(second) && second > 0){
                                $('#second').html(second);
                                second --;
                            }else{
                                clearInterval(timer);
                                window.location.href = '?p=back&c={$c}&m=show{$sid}'; 
                            }
                        },1000);
            
                       </script>
str;
                echo $str;
                 
            }
        }
        //拼接数据
        public function detal($mark=false){
            if($mark){
                $str = '';
                foreach ($_POST as $k=>$v){
                    $str .= "`$k`='$v',";
                }
                return rtrim($str,',');
            }
            $key = '';
            $val = '';
            foreach ($_POST as $k=>$v){
                $key.= "`$k`,";
                $val .= "'$v',";
            }
            $key .= '`timestamp`';
            $val .= time();
            return array($key,$val);
        }
    }


?>