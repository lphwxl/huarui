<?php

    class AdminController extends BackController{
        
        public function index(){
            
            $admin = new Admin();
            $content = $admin->tab('hd_corporate')->sele();
            !empty($content)&&$this->assign('content', $content);
            $news = $admin->tab('hd_news')->fileds('`title`')->where('`isdel`=1')->order('timestamp desc')->limit('0,9')->sele();
            !empty($news)&&$this->assign('news', $news);
            $hum = $admin->tab('hd_jobs')->fileds('`title`,`position`')->sele();
            !empty($hum)&&$this->assign('hum', $hum);
            $this->display('index.html');
        }
        
        //显示
        public function show(){
            $admin = new Admin();
            if($_GET['sid'] === '1'){
                $content = $admin->tab('hd_corporate')->sele();
               
            }elseif($_GET['sid'] === '2'){
                $html = $admin->w('`isdel`=1')->pag('hd_news');
                $content = $admin->tab('hd_news')->fileds('`id`,`title`')->where('`isdel`=1')->order('`id` asc')->sele();
            }elseif($_GET['sid'] === '3'){
                $html = $admin->pag('hd_jobs');
                $content = $admin->tab('hd_jobs')->fileds('`id`,`title`,`position`')->sele();
                
            }
            !empty($html)&&$this->assign('html', $html);
            !empty($content)&&$this->assign('content', $content);
            isset($_GET['sid']) && $this->display('show.html');
        }
       
        
        //添加数据 insert into table(jina) values(ahi)
        public function add(){
            $admin = new Admin();
            if(isset($_POST['sub'])){
                unset($_POST['sub']);
                switch($_GET['sid']){
                    case '1':
                        $arr = $this->detal();
                        $res = $admin->tab('`hd_corporate`')->add($arr[0],$arr[1]);
                        break;
                    case '2':
                        $arr = $this->detal();
                        $res = $admin->tab('`hd_news`')->add($arr[0],$arr[1]);
                        break;
                    case '3':
                        $arr = $this->detal();
                        $res = $admin->tab('`hd_jobs`')->add($arr[0],$arr[1]);
                        break;
                }
               $this->success('dele.html',$res);
            }else{
                
                $this->display('add.html');
            }
        }
        
        //真假删除数据
        public function dele(){
            $admin = new Admin();
            $k = '';
            if(isset($_POST['ids'])){
                foreach ($_POST['ids'] as $v){
                    $k .= $v.',';
                }
                $k = rtrim($k,',');
            }
            if($_GET['sid']==='2' && isset($_GET['id'])){
                $where = '`id`='.$_GET['id'];
                $res = $admin->tab('hd_news')->w($where)->dele(false,'`isdel`=0');
                
            }elseif($_GET['sid']==='2' && (!isset($_GET['id']))){
                
                $res = $admin->tab('hd_news')->w("`id` in ($k)")->dele(false,'`isdel`=0');
                
            }
            if($_GET['sid'] !=='2' && empty($k)){
                $where = '`id`='.$_GET['id'];
                if($_GET['sid'] ==='1'){
                    $res = $admin->tab('`hd_corporate`')->w($where)->dele(true);
                }else{
                    $res = $admin->tab('`hd_jobs`')->w($where)->dele(true);
                }
            }elseif($_GET['sid'] ==='3' && (!empty($k))){
                $res = $admin->tab('hd_jobs')->w("`id` in ($k)")->dele(true);
            }
            $this->success('dele.html',$res);
        }
        
        
        public function handle(){
            $admin = new Admin();
            if(isset($_POST['sub'])){
                unset($_POST['sub']);
                switch($_GET['sid']){
                    case '1':
                        $arr = $this->detal(true);
                        $res = $admin->tab('`hd_corporate`')->w('id='.$_GET['id'])->upda($arr);
                        break;
                    case '2':
                        $arr = $this->detal(true);
                        $res = $admin->tab('`hd_news`')->w('id='.$_GET['id'])->upda($arr);
                        break;
                    case '3':
                        $arr = $this->detal(true);
                        $res = $admin->tab('`hd_jobs`')->w('id='.$_GET['id'])->upda($arr);
                        break;
                }
                $this->success('dele.html',$res);
                exit;
            }
            
            switch ($_GET['sid']){
                //公司概况
                case '1':
                    $arr = $admin->tab('hd_corporate')->w('id='.$_GET['id'])->sele();
                    break;
                    //新闻
                case '2':
                    $str = '`title`,`content`,`author`,`isdel`';
                    $arr = $admin->fileds($str)->tab('hd_news')->w('id='.$_GET['id'])->sele();
                    break;
                    //招聘
                case '3':
                    $arr = $admin->tab('hd_jobs')->w('id='.$_GET['id'])->sele();
                    break;
            }
            $this->assign('content', $arr);
            $this->display('update.html');
        }
        
        
    }


?>