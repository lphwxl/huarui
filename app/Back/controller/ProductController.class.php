<?php 

    class ProductController extends BackController{
        
        
        //显示数据
        public function show() {
            $admin = new Admin();
            $html = $admin->w('`isdel`=1')->pag('hd_product');
            $arr = $admin->tab('hd_product')->fileds('`id`,`title`,`content`')->sele();
            $html && $this->assign('html', $html);
            $this->assign('content', $arr); 
            $this->display('show.html');
        }
        //删除数据
        public function dele(){
            $admin = new Admin();
            if(isset($_POST['ids'])){
                $k = '';
                foreach ($_POST['ids'] as $v){
                    $k .= $v.',';
                }
                $k = rtrim($k,',');
                $res = $admin->tab('hd_product')->w("id in ($k)")->dele(false,'`isdel`=0');
            }
            if(isset($_GET['id'])){
                $where = '`id`='.$_GET['id'];
                $res = $admin->tab('hd_product')->w($where)->dele(false,'`isdel`=0');
            }
            $this->success('show.html',$res,$c='product');
        }
        //添加数据
        public function add(){
            $admin = new Admin();
            if(isset($_POST['sub'])){
                $this->postData();
                $arr = $this->detal();
                $res = $admin->tab('`hd_product`')->add($arr[0],$arr[1]); 
                if($res){
                    $this->success('add.html',$res,$c='product');
                    return;
                }
            }
            $this->display('add.html');
        }
        //修改数据
        public function handle(){
            $admin = new Admin();
            if(isset($_POST['sub'])){
                if(isset($_SESSION['filepath0']) && isset($_SESSION['filepath1'])){
                    $res = $admin->tab('hd_product')->fileds('`bigimg`,`d_img`')->w('id='.$_GET['id'])->sele();
                    if($_POST['previmg']){
                        unset($_POST['previmg']);
                        $this->postData($res[0]['bigimg'],$res[0]['d_img']);
                    }else{
                        unset($_POST['previmg']);
                        $this->postData();
                        $valBig = $this->imgDetal($res[0]['bigimg']);
                        $valDimg = $this->imgDetal($res[0]['d_img']);
                        $mark = ($valBig && $valDimg)?true:false;
                    }
                }elseif(isset($_SESSION['filepath0']) && (!isset($_SESSION['filepath1']))){
                    $res = $admin->tab('hd_product')->fileds('`bigimg`')->w('id='.$_GET['id'])->sele();
                    if($_POST['previmg']){
                        unset($_POST['previmg']);
                        $this->postData($res[0]['bigimg']);
                    }else{
                        unset($_POST['previmg']);
                        $this->postData();
                        $valBig = $this->imgDetal($res[0]['bigimg']);
                        $mark = $valBig?$valBig:false;
                    }
                    
                }elseif(!isset($_SESSION['filepath0']) && isset($_SESSION['filepath1'])){
                    $res = $admin->tab('hd_product')->fileds('`d_img`')->w('id='.$_GET['id'])->sele();
                    if($_POST['previmg']){
                        unset($_POST['previmg']);
                        $this->postData('',$res[0]['d_img']);
                    }else{
                        unset($_POST['previmg']);
                        $this->postData();
                        $valDimg = $this->imgDetal($res[0]['d_img']);
                        $mark = $valDimg?$valDimg:false;
                    }
                }
                $v = $this->detal(true);
                if(isset($mark)){
                    if(!$mark){
                        return ;
                    }
                    $res = $admin->tab('hd_product')->w('id='.$_GET['id'])->upda($v);
                }else{
                    $res = $admin->tab('hd_product')->w('id='.$_GET['id'])->upda($v);
                }
                if($res){
                    $this->success('add.html',$res,$c='product');
                }
                return;
            }
            $res = $admin->tab('`hd_product`')->fileds('`title`,`content`,`isdel`')->w('id='.$_GET['id'])->sele();
            $this->assign('content', $res);
            $this->display('add.html');
        }
        public function upload(){
            $load = Upload::getInstance($_FILES['file']);
            if(!isset($_GET['id'])){
                $result = $load->show();
            }else{
                $result = $load->setPath('filepath'. $_GET['id'])->show();
            }
            if(!empty($result)){
                exit(json_encode($result));
            }
        }
        
        //对post数据的处理
        private function postData($str1='',$str2=''){
            unset($_POST['sub']);
            if(isset($_SESSION['filepath0'])){
                $filepath0 = $this->forOne($_SESSION['filepath0']);
                $_POST['bigimg'] = $str1.$filepath0;
                unset($_SESSION['filepath0']);
            }
            if(isset($_SESSION['filepath1'])){
                $filepath1 = $this->forOne($_SESSION['filepath1']);
                $_POST['d_img'] = $str2.$filepath1;
                unset($_SESSION['filepath1']);
            }
        }
        //foreach遍历
        private function forOne($arr=array()){
            $file='';
            if(is_array($arr)){
                foreach ($arr as $v){
                    $file .= $v.',';
                }
                return $file;
            }
        }
        
        //图片地址的处理
        private function imgDetal($str1=''){
            if(!is_string($str1)){
                return 0;
            }
            $mark = true;
            $arr = explode(',', $str1);
            foreach ($arr as $k=>$v){
                if(empty($v)){
                    continue;   //过滤掉空字符串
                }
                if(file_exists($v)){
                    $result = unlink($v);
                    if(!$result){
                        $mark = false;
                        break;
                    }
                }
            }
            return $mark;
        }
    }



?>